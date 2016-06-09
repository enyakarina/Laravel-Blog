<!DOCTYPE html>

@if (Auth::guest())
    @include('partials.guestnav')
@elseif(Auth::user())
    @include('partials.usernav')
@endif

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif

@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

@if (Session::has('signupError'))
    <div class="alert alert-danger">{{{ Session::get('signupError') }}}</div>
@endif

@if (Session::has('signupSuccess'))
    <div class="alert alert-success">{{{ Session::get('signupSuccess') }}} </div>
@endif

@if (Session::has('loginError'))
    <div class="alert alert-danger">{{{ Session::get('loginError') }}} </div>
@endif

@if (Session::has('updateProfileError'))
    <div class="alert alert-danger">{{{ Session::get('updateProfileError') }}} </div>
@endif

@if (Session::has('editError'))
    <div class="alert alert-danger">{{{ Session::get('editError')}}} </div>
@endif

@if (Session::has('EditPostError'))
    <div class="alert alert-danger">{{{ Session::get('EditPostError') }}} </div>
@endif

@if (Session::has('deleteError'))
    <div class="alert alert-danger">{{{ Session::get('deleteError') }}} </div>
@endif

@yield('content')

@yield('bottom-script')

@extends('partials.footer')

<!--jquery-->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>