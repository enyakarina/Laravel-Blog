<?php

class UsersController extends \BaseController 
{
    public function showLogin()
    {
        return View::make('users.login');
    }

    public function userLogin()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if(Auth::attempt(array('username' => $username, 'password' => $password))) 
        {
            return Redirect::intended();
        } else {
            Session::flash('loginError', 'Username or Password is incorrect!');
            return Redirect::back()->withInput();
        }
    }

    public function userLogout()
    {
        Auth::logout();
        return Redirect::to('/login');    
    }

    public function showSignup()
    {
        return View::make('users.signup');
    }

    public function userSignup()
    {
        $user = new User();
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $validator = Validator::make(Input::all(), User::$rules);

        if($validator->fails()) {
            Session::flash('signupError', 'There seems to be a problem signing up...');
            return Redirect::back()->withInput()->withErrors($validator);
        } else if($user->save()) {
            Session::flash('signupSuccess', 'Congratulations, you have created a new account!');
            $credentials = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
                );
            if(Auth::attempt($credentials)) {
               return Redirect::action('PostsController@index');
            } 
        }
    }
}