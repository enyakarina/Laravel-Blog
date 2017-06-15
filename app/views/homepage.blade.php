@extends('layouts.master')

@section('title')
    Homepage
@stop

@section('content')

<div class="homepage-wrapper">
  <div class="container-fluid homepage-container">
      <div class="row">
          <div class="col-xs-12">
              <h1 class="teal-text">My name is Kari Palomino</h1>
              <h3>I'm a 23 year old web developer based in Texas.</h3>
          </div>
      </div>
  </div>
  <div class="container-fluid about-me">
      <div class="row">
         <div class="col-xs-12 col-md-5 about">
             <h2 class="salmon-text">&lt;about me&gt;</h2>
             <p>I've been a <span class="teal-text">web developer</span> for a little over a year. It took me around 4 months (500+ hrs of coding) to familiarize myself with the LAMP stack.</p>
             <p> In October 2016, I took a job at a <span class="teal-text">coding academy</span> where I spent my time helping adults learn the basics of web development.</p> 
             <p>I realized that with teaching, you give others a piece of your knowledge, and in return you gain something valuable: <span class="salmon-text">reinforcement.</span></p>
         </div>
         <div class="col-xs-12 col-md-offset-1 col-md-6 contact">
             <h2 class="salmon-text">&lt;contact and social&gt;</h2>
             <p><a href="https://github.com/enyakarina"><i class="fa fa-github-alt fa-3x teal-text" aria-hidden="true"></i></a></p>
             <p><i class="fa fa-linkedin fa-3x red-text" aria-hidden="true"></i></p>
             <p><a href="https://codepen.io/kari226/"><i class="fa fa-codepen fa-3x teal-text" aria-hidden="true"></i></a></p>
             <p><a href="https://twitter.com/codekari"><i class="fa fa-twitter fa-3x red-text" aria-hidden="true"></i></a></p>
         </div> 
      </div>
  </div>
</div>
@stop
