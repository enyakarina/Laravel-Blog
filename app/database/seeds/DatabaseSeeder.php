<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('posts')->delete();
		DB::table('users')->delete();
		DB::table('profiles')->delete();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
		$this->call('ProfileTableSeeder');
	}

}
