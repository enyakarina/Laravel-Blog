@extends('layouts.master')

@section('username')
Login
@stop

@section('content')
<div class="container-fluid" id="login">
    <div class="container login-form">
        <div class="page-header">
        <h1 id="login-h1">Login</h1>
        </div>
    {{ Form::open(array('action' => 'UsersController@userLogin')) }}

        <div class="form-group form-group-lg">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
            {{ Form::text('username', null, array('placeholder' => 'Enter your Username!', 'class' => 'form-control', 'id' => 'username', 'value' => "{{{ Input:old('username') }}}")) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
            {{ Form::password('password', array('placeholder' => 'Enter your Password!', 'class' => 'form-control', 'id' => 'password')) }}
        </div>

        <div class="form-group">
            <button class="btn btn-primary submit-button loginButton" name="submit" type="submit">Login</button>
        </div>

        {{ Form::close() }}
        </div>
    </div>

@stop