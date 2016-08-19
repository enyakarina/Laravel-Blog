@extends('layouts.master')

@section('username')
Login
@stop

@section('content')
<div class="container-fluid" id="login">
    <div class="container login-form">
        <div class="page-header">
        <h1 id="login-h1">Sign up</h1>
        </div>
    {{ Form::open(array('action' => 'UsersController@userSignup')) }}

        <div class="form-group form-group-lg">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
            {{ Form::text('username', null, array('placeholder' => 'Give Yourself a Username!', 'class' => 'form-control', 'id' => 'username', 'value' => "{{{ Input:old('username') }}}")) }}
            {{ $errors->first('username', '<span class="help-block signup-error">:message</span>') }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('email', 'Email', array('class' => 'control-label')) }}
            {{ Form::text('email', null, array('placeholder' => 'Enter your E-mail!', 'class' => 'form-control', 'id' => 'email', 'value' => "{{{ Input:old('email') }}}")) }}
            {{ $errors->first('email', '<span class="help-block signup-error">:message</span>') }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
            {{ Form::password('password', array('placeholder' => 'Choose a Password!', 'class' => 'form-control', 'id' => 'password')) }}
            {{ $errors->first('password', '<span class="help-block signup-error">:message</span>') }}
        </div>

        <div class="form-group">
            <button class="btn btn-primary submit-button loginButton" name="submit" type="submit">Sign Up</button>
        </div>

        {{ Form::close() }}
        </div>
    </div>

@stop