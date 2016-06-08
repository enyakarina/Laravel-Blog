<?php

class Profile extends BaseModel {
    protected $table = "profiles";
    public static $rules = array(
    'location' => 'required|max:254',
    'bio' => 'required'
    );
    
    public function user()
    {
        return $this->belongsTo('User');
    }
}