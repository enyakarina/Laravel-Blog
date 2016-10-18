@extends('layouts.master')

@section('title')
Kari's Portfolio
@stop

@section('content')
<div class="container">
<!--HEADER-->
    <div class="page-header portfolio-header">
    <h1 id="portfolio-h1">Coding Projects</h1>
    </div>
    <!--BOX 1-->
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="thumbnail portfolio-info">
        <img src="/images/whack.png" alt="hammer" class="portfolio-images">
          <div class="caption">
            <a href="/whack"><h3 class="portfolioTitle">Whack-An-Annoying-Dog</h3></a>
            <p>This is one of the projects I enjoyed building the most. You click start and try to get as many points as you can by clicking on the dogs that pop up in the circles!</p>
            <span class="label label-warning">JavaScript</span>
            <span class="label label-primary">JQuery</span> 
            <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
    <!--BOX 2-->
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="thumbnail portfolio-info">
        <a href="/simon"><img src="/images/simplesimon.png" alt="simonsays" class="portfolio-images"></a>
          <div class="caption">
            <a href="/simon"><h3 class="portfolioTitle">Simon Says</h3></a>
            <p>This was one of the most difficult projects for me. Being able to complete it was an awesome feeling.</p>
            <span class="label label-warning">JavaScript</span> <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
    <!--BOX 3-->
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="thumbnail portfolio-info">
        <a href="/calculator"><img src="/images/calculator.png" alt="calculator" class="portfolio-images"></a>
          <div class="caption">
            <a href="/calculator"><h3 class="portfolioTitle">JavaScript Calculator</h3></a>
            <p>This is a simple calculator coded in vanilla JavaScript.</p>
            <span class="label label-warning">JavaScript</span> <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
      <!--BOX 4-->
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="thumbnail portfolio-info">
        <a href="/posts"><img src="/images/blog.png" alt="pencil" class="portfolio-images"></a>
          <div class="caption">
            <a href="/posts"><h3 class="portfolioTitle">Website/Blog</h3></a>
            <p>Created my personal site and a fully functioning blog application using the Laravel Framework.</p>
            <span class="label label-info">Laravel</span> <span class="label label-success">HTML5</span> <span class="label label-danger">CSS3</span></p>
          </div>
        </div>
      </div>
</div>

@stop