@extends('layouts.master')

@section('title')
Create a Blog Post
@stop

@section('content')
<div class="container">
    <h1 class="display-1">Create a New Blog Post</h1>
    <form action="{{{ action('PostsController@store') }}}" method="POST">
<!--TITLE-->
        <div class="form-group form-group-lg"> <!-- Name field -->
            <label class="control-label " for="title">Post Title</label>
            <input class="form-control" id="title" name="title" type="text" placeholder="Post Title" />
        </div>
<!--IMAGE UPLOAD-->
        <div class="form-group">
            <input type="file" name="image">
            <p class="help-block"><em>Upload an image.</em></p>
        </div>
<!--CONTENT-->
        <div class="form-group">
            <label class="control-label " for="content">Content</label>
            <textarea class="form-control" cols="40" id="content" name="content" rows="10" placeholder="Dear Blog, today is an awesome day!"></textarea>
        </div>
<!--SUBMIT-->
         <div class="form-group">
            <button class="btn btn-primary " name="submit" type="submit">Submit</button>
        </div>
    </form>
</div>
@stop