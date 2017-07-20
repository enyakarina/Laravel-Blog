@extends('layouts.master')

@section('title')
Kari's Portfolio
@stop

@section('content')
<h1 class="teal-text">&lt;projects&gt;</h1>
<p>These are some of the projects I made while learning to code. The games are styled with inspiration from classic 8-bit videogames.</p>
<p>I used <span class="salmon-text">HTML</span> and <span class="salmon-text">CSS</span>, as well as <span class="salmon-text">JavaScript</span> and <span class="salmon-text">jQuery</span>. My blog is made using the <span class="salmon-text">Laravel</span> framework.</p>
  <div class="container">
    <div class="row portfolio-row">

    {{-- FIRST --}}
      <div class="project col-xs-12 col-md-6 col-lg-6">
        <div>
          <figure>
            <a href="/whack"><img src="/images/whack.png" class="img-responsive project-pic" alt="picture of a whack-a-mole game made by kari palomino"></a>
          </figure>
        </div>
        <h3>whack-an-<span class="salmon-text">annoying</span>-dog</h3>
      </div>
      {{-- SECOND --}}
      <div class="project col-xs-12 col-md-6 col-lg-6">
        <div>
          <figure>
            <a href="/simon"><img src="/images/simplesimon.png" class="img-responsive project-pic" alt="picture of a simonsays game made by kari palomino"></a>
          </figure>
        </div>
        <h3>simon<span class="salmon-text"> says</span></h3>
      </div>
      {{-- THIRD --}}
      <div class="project col-xs-12 col-md-6 col-lg-6">
        <div>
          <figure>
            <a href="/calculator"><img src="/images/newCalculator.png" class="img-responsive project-pic" alt="picture of a javascript calculator made by kari palomino"></a>
          </figure>
        </div>
        <h3>vanilla javascript<span class="salmon-text"> calculator</span></h3>
      </div>
      {{-- FOURTH --}}
      <div class="project col-xs-12 col-md-6 col-lg-6">
        <div>
          <figure>
            <a href="/posts"><img src="/images/pencilpaper.svg" class="img-responsive project-pic" alt="picture of a pencil"></a>
          </figure>
        </div>
        <h3>personal<span class="salmon-text"> blog</span></h3>
      </div>
    </div>
    {{-- FIFTH --}}
    <div class="project col-xs-12 col-md-6 col-lg-6">
        <div>
          <figure>
            <a href="http://enyakarina.github.io"><img src="/images/personal-site.png" class="img-responsive project-pic" alt="picture of my online resume site"></a>
          </figure>
        </div>
        <h3>single page <span class="salmon-text"> personal site</span></h3>
      </div>
    </div>
    </div>
  </div>

@stop