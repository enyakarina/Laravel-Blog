@extends('layouts.master')

@section('title')
Edit your Profile Info
@stop

@section('content')
<h1 class="display-1" id="headerEditProfile">Edit Your Information</h1>

{{ Form::model($profile, array('action' => array('ProfilesController@update', $profile->id), 'method' => 'POST')) }}

<!--LOCATION-->
<div class="form-group form-group-lg">
   {{ Form::label('location', 'Location', array('class' => 'control-label')) }}
   {{ Form::text('location', null, array('placeholder' => ' Location', 'class' => 'form-control', 'id' => 'location', 'value' => "{{{ Input:old('location') }}}")) }}
    {{ $errors->first('location', '<span class="help-block">:message</span>') }}
</div>

<!--Bio-->
<div class="form-group">
   {{ Form::label('bio', 'Bio', array('class' => 'control-label')) }}
   {{ Form::textarea('bio', null, array('placeholder' => 'I am awesome', 'class' => 'form-control', 'id' => 'bio', 'cols' => '40', 'rows' => '10', 'value' => "{{{ Input::old('bio') }}}")) }}
    {{ $errors->first('bio', '<span class="help-block">:message</span>') }}
</div>
<!--SUBMIT-->
<div class="form-group">
    <button class="btn btn-primary submit-button" name="submit" type="submit">Submit</button>
</div>
{{ Form::close() }}
@stop