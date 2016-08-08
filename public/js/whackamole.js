(function(){

    "use strict"
    
    $(document).ready(function(){
        
        $("#dog").hide();

        // these are the global variables
        var counter;
        var highScore = localStorage.getItem("highScore"); 
        var holes = $('#box1, #box2, #box3, #box4, #box5, #box6, #box7, #box8, #box9');
        var person = prompt("ENTER YOUR NAME TO CONTINUE", "Kari");
        var score = 0;
        var time = 38;

        //this is the function that generates a random dog
        //a dog will appear in each hole
        //if a dog is clicked, add 1 point
        //dogs will be on the screen for 1 second, then disappear.
        function randomDog() {
            var hole = $(holes[Math.floor(Math.random()*holes.length)]);
            hole.addClass("selected");
            //this removes event listeners before adding the new one
            //this way, it won't count the single click 
            //multiple times.
            //one is used instead of on so that
            //the listener is automatically removed the first
            //time it is called (hooking an event once).
            $(".selected").off("click").one("click", function() {
                //create a bark sound when the dog is clicked
                var bark = document.createElement("audio");
                bark.setAttribute("src", "/wav/tinydogbark.wav");
                bark.play();
                //remove dog from board on click
                hole.removeClass("selected");
                score++;
                $("#score").html("Score: " + score);
             });
            setTimeout(function() {
                hole.removeClass("selected");
            }, 1000);
        };

        //this is the timer function
        //it will decrease by 1 each interval
        function timer() {
            time = time - 1;
            //as long as the timer is greater than 0
            //it will generate a random dog(mole).
            if (time > 0) {
                randomDog();
            //stops the counter at 0
            //ends game when that happens
            } if (time === 0) {
                clearInterval(counter);
                endGame();
            }
            $("#timer").html("Time: " + time + "s");
        };

        //this function just hides elements to prevent
        //the user from playing 
        function endGame() {
            $("#grid").hide();
            $(".holes").hide();
            $("#start").hide();
            $("#description").hide();
            $("#dog").show();
            //grabs prompt's user input and
            //incorporates it into message
            if (person != null) {
                $("#det").html(person + ", STAY DETERMINED!")
            }
            //plays a different song on end game
            var determination = document.createElement("audio");
            determination.setAttribute("src", "/mp3/determination.mp3");
            determination.play();
            //highscore code
            if (highScore === null) {
                highScore = 0;
            } 

            if (score > highScore) {
                localStorage.setItem("highScore", score);
                highScore = score;
            }
            //displays high score at the end of 
            //the game
            $("#high").html("Best: " + highScore);
        };
        
        //displays high score on reload
        $("#high").html("Best: " + highScore);

        //prevents the timer from starting as soon as
        //the page is loaded.
        //will only start when the user clicks start button
        $("#start").on("click", function() {
            counter = setInterval(timer, 1000);
            //annoying music starts when user clicks start
            var dogSong = document.createElement("audio");
            dogSong.setAttribute("src", "/mp3/dogsong.mp3");
            dogSong.play();
            //prevents it from running the function
            //if it's clicked a second time
            $(this).off("click");
        });

        //will reload the page to reset everything
        $("#reset").on("click", function() {
            location.reload();
        });
    });
})();