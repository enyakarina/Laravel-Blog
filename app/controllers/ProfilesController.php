<?php

class ProfilesController extends \BaseController 
{

    public function showProfile($username)
    {
        $user = User::with('profile')->whereUsername($username)->first();
        return View::make('profile.profile')->with('user', $user);
    }

    public function edit()
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
                return Redirect::to('/posts');
    }
}