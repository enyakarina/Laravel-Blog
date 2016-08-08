@extends('layouts.master')

@section('username')
Login
@stop

@section('content')
<div class="container-fluid" id="login">
    <h1 class="display-1" id="headerLogin">Login</h1>
    {{ Form::open(array('action' => 'UsersController@userLogin')) }}

        <div class="form-group form-group-lg">
            {{ Form::label('username', 'Username', array('class' => 'control-label')) }}
            {{ Form::text('username', null, array('placeholder' => 'Username', 'class' => 'form-control', 'id' => 'username', 'value' => "{{{ Input:old('username') }}}")) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
            {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'id' => 'password')) }}
        </div>

        <div class="form-group">
            <button class="btn btn-primary submit-button" name="submit" type="submit">Submit</button>
        </div>

        {{ Form::close() }}

    </div>

@stop