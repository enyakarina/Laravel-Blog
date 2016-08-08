<!DOCTYPE html>

<html>

<head>

    <title>Whack-a-Mole!</title>

    <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="/css/whackamole.css">

</head>

<body>

    <div id="container">
        <h1>Whack-an-<span id="annoying">Annoying</span>-Dog!</h1>
        <p id="description">Smack 'em like you mean it!</p>
        <p id="dog"><img src="/images/annoyingdog.gif"><br><span id="det">STAY DETERMINED!</span></p>

        <div class="scoreTime">
                <p id="score" class="stats">Score: 0</p>
                <p id="timer" class="stats">Time: 38s</p>
                <p id="high" class="stats">Best: </p>
        </div>

        <div id="grid">
            <div id="box1" class="holes"></div>
            <div id="box2" class="holes"></div>
            <div id="box3" class="holes"></div>
            <div id="box4" class="holes"></div>
            <div id="box5" class="holes"></div>
            <div id="box6" class="holes"></div>
            <div id="box7" class="holes"></div>
            <div id="box8" class="holes"></div>
            <div id="box9" class="holes"></div>
        </div>

        <div id="clickables">
            <button id="start" class="button">Start</button>
            <button id="reset" class="button">Reset</button>
        </div>

        <p><a href="/portfolio">Back to Portfolio</a></p>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/js/whackamole.js"></script>

</body>

</html>