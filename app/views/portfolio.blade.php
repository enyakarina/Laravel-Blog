@extends('layouts.master')

@section('title')
Kari's Portfolio
@stop

@section('content')
<div class="container">
<!--HEADER-->
    <div class="page-header">
    <h1>Coding Projects</h1>
    </div>
    <!--BOX 1-->
      <div class="col-sm-12 col-md-6">
        <div class="thumbnail">
          <img src="..." alt="">
          <div class="caption">
            <h3>Whack-An-Mole</h3>
            <p>This is one of the projects I enjoyed building the most. You click start and try to get as many points as you can by clicking on the dogs that pop up in the circles!</p>
            <p><a href="#" class="btn btn-primary" role="button">Check it out</a></p>
            <p>
            <span class="label label-primary">JQuery</span> <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
    <!--BOX 2-->
      <div class="col-sm-12 col-md-6">
        <div class="thumbnail">
          <img src="..." alt="">
          <div class="caption">
            <h3>Simon Says</h3>
            <p>This was one of the most difficult projects for me. Being able to complete it was an awesome feeling.</p>
            <p><a href="#" class="btn btn-primary" role="button">Check it out</a></p>
            <p>
            <span class="label label-primary">JQuery</span> <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
    <!--BOX 3-->
      <div class="col-sm-12 col-md-6">
        <div class="thumbnail">
          <img src="..." alt="">
          <div class="caption">
            <h3>JavaScript Calculator</h3>
            <p>This is a simple calculator coded in vanilla javascipt</p>
            <p><a href="#" class="btn btn-primary" role="button">Check it out</a></p>
            <p>
            <span class="label label-warning">JavaScript</span> <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
      <!--BOX 4-->
      <div class="col-sm-12 col-md-6">
        <div class="thumbnail">
          <img src="..." alt="">
          <div class="caption">
            <h3>Blog</h3>
            <p>Created a fully functioning blog application using the Laravel Framework.</p>
            <p><a href="#" class="btn btn-primary" role="button">Check it out</a></p>
            <p>
            <span class="label label-info">Laravel</span> <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
</div>

@stop