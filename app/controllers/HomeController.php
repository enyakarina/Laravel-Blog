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
		return View::make('homepage');
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
		return View::make('whack');
	}

	public function showSimon()
	{
		return View::make('simon');
	}

	public function showCalculator()
	{
		return View::make('calculator');
	}

	public function blogHome()
	{
		return View::make('posts.home');
	}

	public function showWeather()
	{
		return View::make('weather');
	}

}
