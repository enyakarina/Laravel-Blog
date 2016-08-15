<?php

class ProfilesController extends \BaseController 
{

    public function showProfile($username)
    {
        $user = User::with('profile')->whereUsername($username)->first();
        if($user == null) {
            App::abort(404);
        }
        else if($user->profile == null) {
            return Redirect::action('ProfilesController@create', $user->username);
        } else {
            return View::make('profile.profile')->with('user', $user);
        }
    }

    public function edit($id) 
    {
        $profile = Profile::find($id);
        $user = User::find($profile->user_id);
        if (Auth::user()->id == $user->id) {
            return View::make('profile.editprofile')->with('profile', $profile);
        } else {
            Session::flash('editError', 'Sorry, you cannot edit someone else\'s profile, but you can look at it!');
            return Redirect::action('ProfilesController@showProfile', $user->username);
        }
    }

    public function create()
    {
        return View::make('profile.createprofile');
    }

    public function store()
    {
        $profile = new Profile();
        $profile->location = Input::get('location');
        $profile->bio = Input::get('bio');
        $profile->user_id = Auth::user()->id;
        $validator = Validator::make(Input::all(), Profile::$rules);

        if($validator->fails()) {
            Session::flash('profileError', 'Oops, there seems to be a problem. Fill out all the fields');
            return Redirect::back()->withInput()->withErrors($validator);
        }else if($profile->save())
            Session::flash('profileSuccess', 'You have successfully updated your profile!');
                return Redirect::to('ProfilesController@showProfile', $profile->user->username);
    }

    public function update($id)
    {
        $profile = Profile::find($id);
        $profile->location = Input::get('location');
        $profile->bio = Input::get('bio');
        $profile->user_id = Auth::user()->id;
        $user = User::find($profile->user_id);
        $validator = Validator::make(Input::all(), Profile::$rules);

        if($validator->fails()) {
            Session::flash('updateProfileError', 'Oops, there seems to be a problem updating your profile!');
            return Redirect::back()->withInput()->withErrors($validator);
        }else if($profile->save()) {
            Session::flash('successMessage', 'You have successfully updated your profile!');
            return Redirect::action('ProfilesController@showProfile', $user->username);
        }
    }
}