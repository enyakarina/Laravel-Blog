<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	public static $rules = array(
    'username' => 'required|max:20|unique:users',
    'email' => 'required|max:254|unique:users|email',
    'password' => 'required'
    );

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	//this function is plural b/c a user can have multiple posts
	public function posts()
	{
		return $this->hasMany('Post');
	}

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function setPasswordAttribute($value)
	{
    $this->attributes['password'] = Hash::make($value);
	}
}
