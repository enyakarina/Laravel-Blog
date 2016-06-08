<?php

class PostsController extends \BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array(
        	'except' => array(
        		'index', 
        		'show'
        	)
        ));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(5);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		$post->title = Input::get('title');
		$post->content = Input::get('content');
		$post->user_id = Auth::user()->id;
		//this creates the validator
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			Session::flash('errorMessage', 'Oops, there seems to be a problem creating your post!');
			return Redirect::back()->withInput()->withErrors($validator);
		}else if($post->save()) {
			Session::flash('successMessage', 'You have successfully created the post!');
			return Redirect::action('PostsController@show', $post->id);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			$post = Post::find($id);
			return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->content = Input::get('content');
		$post->user_id = Auth::user()->id;

		//this creates the validator
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			Session::flash('errorMessage', 'Oops, there seems to be a problem updating your post!');
			return Redirect::back()->withInput()->withErrors($validator);
		}else if($post->save()) {
			Session::flash('successMessage', 'You have successfully updated the post!');
			return Redirect::action('PostsController@show', $post->id);
		}
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
        $post->delete();
        return Redirect::action('PostsController@index');
	}


}
