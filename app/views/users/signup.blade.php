@extends('layouts.master')

@section('username')
Login
@stop

@section('content')
<div class="container-fluid" id="login">
<h1 class="display-1" id="headerSignup">Sign up</h1>
    {{ Form::open(array('action' => 'UsersController@userSignup')) }}

        <div class="form-group form-group-lg">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
            {{ Form::text('username', null, array('placeholder' => 'Username', 'class' => 'form-control', 'id' => 'username', 'value' => "{{{ Input:old('username') }}}")) }}
            {{ $errors->first('username', '<span class="help-block">:message</span>') }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('email', 'Email', array('class' => 'control-label')) }}
            {{ Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control', 'id' => 'email', 'value' => "{{{ Input:old('email') }}}")) }}
            {{ $errors->first('email', '<span class="help-block">:message</span>') }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
            {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'id' => 'password')) }}
            {{ $errors->first('password', '<span class="help-block">:message</span>') }}
        </div>

        <div class="form-group">
            <button class="btn btn-primary submit-button" name="submit" type="submit">Submit</button>
        </div>

        {{ Form::close() }}

    </div>

@stop