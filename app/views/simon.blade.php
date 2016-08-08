<!DOCTYPE html>
<html>
<head>
    <title>SIMON SAYS!</title>
    <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/simplesimon.css">
</head>
<body>
    <h1> Simple Simon </h1>
    <p id="instructions"><b>HOW TO PLAY:</b> Click Start. Watch the colors light up. Try to copy the same sequence.
    If you make it to 20 rounds, you win.</p>    
    <!-- Hidden Image. Only displays when the player loses. -->
    <p id="peach" class="hidden"><img src="https://49.media.tumblr.com/77242749f181de0c166edd4e2eb53278/tumblr_ntanoth2q41u1adh5o1_400.gif">
    <div id="wrapper">
        <div id="red" class="colors red" data-tile="1"></div>
        <div id="blue" class="colors blue" data-tile="2"></div>
        <div id="green" class="colors green" data-tile="3"></div>
        <div id="yellow" class="colors yellow" data-tile="4"></div>
    </div>
    <div id="buttons">
        <button id="start">Start</button>
        <button id="reset">Reset</button>
    </div>
    <div class="count">
        <p id="round" data-round="0">0</p>
    </div>
    <p><a href="/portfolio">Back to Portfolio</a></p>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script src="/js/simplesimon.js"></script>
</body>
</html>