@extends('layouts.master')

@section('title')
Create a Blog Post
@stop

@section('content')
<h1 class="display-1" id="headerCreateBlog">Create a New Blog Post</h1>
<div class="container-fluid" id="createBlog">
    {{ Form::open(array('action' => 'PostsController@store')) }}
<!--TITLE-->
        <div class="form-group form-group-lg">
           {{ Form::label('title', 'Title', array('class' => 'control-label')) }}
           {{ Form::text('title', null, array('placeholder' => 'Post Title', 'class' => 'form-control', 'id' => 'title', 'value' => "{{{ Input:old('title') }}}")) }}
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        </div>
<!--IMAGE UPLOAD IS A PLACEHOLDER. IT DOES NOT WORK YET!!
        <div class="form-group">
            <input type="file" name="image">
            <p class="help-block"><em>Upload an image.</em></p>
        </div>-->
<!--CONTENT-->
        <div class="form-group">
           {{ Form::label('content', 'Content', array('class' => 'control-label')) }}
           {{ Form::textarea('content', null, array('placeholder' => 'Dear Blog, today is an awesome day!', 'class' => 'form-control', 'id' => 'content', 'cols' => '40', 'rows' => '10', 'value' => "{{{ Input::old('content') }}}")) }}
            {{ $errors->first('content', '<span class="help-block">:message</span>') }}
        </div>
<!--SUBMIT-->
         <div class="form-group">
            <button class="btn btn-primary submit-button" name="submit" type="submit">Submit</button>
        </div>
    {{ Form::close() }}
</div>
@stop