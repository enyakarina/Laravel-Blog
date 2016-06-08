<?php

class ProfileTableSeeder extends Seeder {

    public function run()
    {
        $profile = new Profile();
        $profile->location = "San Antonio, TX";
        $profile->bio = "22 year old from TX. Just making a blog page.";
        $profile->user_id = User::first()->id;
        $profile->save();
    }
}