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
    <!--Favicon-->
    <link rel="icon" type="image/x-icon"  href="/images/favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--GOOGlE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- CUSTOM CSS FILE -->
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

@include('partials.footer')

<!--jquery-->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
<!--TINY EMC-->
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
  tinymce.init({ 
    selector:'textarea' 
  });
  </script>
</body>
</html>