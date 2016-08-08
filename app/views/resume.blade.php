@extends('layouts.master')

@section('title')
    Kari's Resume
@stop

@section('content')
<div class="container">
    <div class="page-header">
      <h1>Resume</h1>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12 page-header">
        <h2>Skills</h2>
        <h4>Languages</h4>
            HTML5, CSS3, JavaScript, PHP5+, SQL (using MySQL)
        <h4>Technologies</h4>
            Sublime Text, Sequel Pro, GitHub, JQuery, Laravel, Bootstrap, Google Maps API, JSON.
    </div>
    <hr>
    <div class="col-lg-12 col-md-12 col-xs-12 page-header">
        <h2>Education</h2>
        <h4>Codeup (March 7, 2016 - June 30, 2016)</h4>
            <p>Codeup is a 16-week immersive web development program where you get hands on experience building web applications using the LAMP stack. I spent over 600 hours coding and learning at a fast-paced environment. Received a certificate of completion</p>
        <h4>San Antonio College</h4>
            <p>Associate's Degree in Applied Science. Completed 71 hours of coursework.</p>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 page-header">
        <h2>Projects</h2>
        <h4>Specifix</h4>
            <p>Team of three. Created a question and answer forum where individuals can ask and answer questions related to LAMP + J stack.  Users also have the ability to subscribe to a premium service for a small fee, which allows them to only have their questions answered by high rated individuals. User rating is determined by the amount of votes each user answer receives. This application was created using HTML, CSS, Bootstrap for responsiveness, AJAX requests, jQuery, MySQL, and Laravel. We also implemented Tiny EMC for submitting questions and answers.</p>
        <h4>Personal Website</h4>
            <p>Individual project. This is a site built using HTML, CSS, Bootstrap, and Laravel. It’s a personal site/open blog where anyone can create, edit, and delete blog posts.</p>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12 page-header">
        <h2>Work Experience</h2>
            <h4>The Egg and I (2015-Present)</h4>
                <p>Position: Server</p>
            <h4>Cracker Barrel(2013-2014)</h4>
                <p>Position: Server</p>
            <h4>Albustan (2012-2013)</h4>
                <p>Position: Server</p>
    </div>
</div>
@stop