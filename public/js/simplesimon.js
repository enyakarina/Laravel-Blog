(function(){

  "use strict"
    $(document).ready(function(){

      var simon = {
        //these are the basic global variables.
        //simonSequence for the game's light order
        //userSequence for the user's input
        //interval to use the clearInterval function
        //click to store the clicked values
        //score to store the current turn number
        simonSequence: [],
        userSequence: [],
        interval: null,
        click: null,
        round: 0,

        //cleans up board,
        //gives the simonSequence random values
        //calls the first round
        startGame: function() {
          simon.simonSequence = [];
          simon.round = 0;
          simon.newRound();
        },

        randomNumber: function(){
          return Math.floor((Math.random() *4) +1);
        },

        //increses round number
        newRound: function(){
          if(simon.round > 20) {
            console.log("*slowclap*");
            simon.endGame();
          } else {
            simon.userSequence = [];
            simon.round++;
            $("#round").html(this.round);
            simon.animate(simon.simonSequence);
            simon.simonSequence.push(simon.randomNumber());
          }
        },

        //whenever a player clicks, this checks to see if
        //the player matches the game's values
        clickCheck: function() {
          if (simon.simonSequence[simon.userSequence.length - 1] === 
            simon.userSequence[simon.userSequence.length - 1]) {
            return true;
          } else {
              return false;
          }
        },

        //fires a new round if the player has clicked 
        //enough times based on current round number
        checkRound: function() {
          if (simon.userSequence.length === simon.round) {
            simon.deactivateBoard();
            setTimeout(function() {
              simon.newRound();
            }, 1000);
          }
        },

        //plays through to 20 rounds
        endGame: function() {
          if (simon.round > 20) {
            alert("u win, mofo");
          }
          clearInterval("simon.interval");
          simon.deactivateBoard();
          $("[data-tile]").addClass("hidden");
          var sound = document.createElement("audio");
            sound.setAttribute("src", "http://themushroomkingdom.net/sounds/wav/mparty8/mparty8_peach_03.wav");
            sound.play();
            $("#start").addClass("hidden");
            $("p").addClass("hidden");
            $("h1").addClass("hidden");
            $("#peach").removeClass("hidden");
        },

        //if the board is active, the player can click
        //on buttons to compare their values to the
        //simonSequence. ends teh game if the value is
        //wrong
        activateBoard: function(){
          $("[data-tile]").removeClass("off");
          $("[data-tile]").off("click").on("click", function(){
            simon.click = $(this).data("tile");
            simon.userSequence.push(simon.click);
            simon.lightUp(simon.click);
            var temp = simon.clickCheck();
            if (!temp) {
              simon.endGame();
            } else {
              simon.checkRound();
            }
          });
        },

        //prevents the player from interfering with
        //the simonSequence animation
        deactivateBoard: function(){
          $("[data-tile]").addClass("off");
        },

        //feed this an array to animate the array with
        //.7 secs between each animation
        animate: function(seq) {
          var i = 0;
          clearInterval(simon.interval);
          simon.interval = setInterval(function(){
            if (i < simon.round) {
              simon.lightUp(seq[i]);
              i++
            } else {
              simon.activateBoard();
              clearInterval(simon.interval);
            }
          }, 700);
        },

        //play the animation for a single element
        //this applies a class
        lightUp: function(tile) {
          var tile = $("[data-tile=" + tile + "]");
          tile.addClass("active");
          setTimeout(function() {
            tile.removeClass("active");
          }, 300);
        },

      };

        //starts the game
        $("#start").on("click", function(){
          simon.startGame();
        });

        //refresh page
        $("#reset").click(function(){
          location.reload();
        });
    });
})();