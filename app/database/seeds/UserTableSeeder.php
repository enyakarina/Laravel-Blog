<?php

class UserTableSeeder extends Seeder {

    public function run() 
    {
        $user = new User();
        $user->username = 'karipalomino';
        $user->email = 'enyakpalomino@gmail.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
    }
}