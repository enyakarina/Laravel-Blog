<?php

class Post extends BaseModel {
    protected $table = "posts";
    public static $rules = array(
    'title' => 'required|max:100',
    'content' => 'required|max:10000'
    );

    public function user()
    {
        return $this->belongsTo('User');
    }
}