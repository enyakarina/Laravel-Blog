<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return Redirect::to('/posts');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function rollDice($guess)
	{
		$data = array('number' => mt_rand(1, 6), 'guess' => $guess);
	    if ($data['number'] == $data['guess']) {
	        echo "YOU ARE CORRECT";
	    } else {
	        echo "YOU ARE WRONG";
	    }
	    return View::make('roll-dice')->with($data);
	}

	public function showWhackaMole()
	{
		return View::make('whackamole');
	}

}
