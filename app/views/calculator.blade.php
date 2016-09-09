<!DOCTYPE html>

<head>
  <title>Calculator Project</title>
  <link rel="stylesheet" type="text/css" href="/css/calc.css">
</head>

<body>
<div id="calculator">
  <p id="title">JavaScript Calculator</p>
  <div class="result">
    <p></p>
  </div>
  <div class="clear"><strong>C</strong></div>
  <span>7</span>
  <span>8</span>
  <span>9</span>
  <span class="op">+</span>

  <span>4</span>
  <span>5</span>
  <span>6</span>
  <span class="op">-</span>

  <span>1</span>
  <span>2</span>
  <span>3</span>
  <span class="op">÷</span>

  <span>0</span>
  <span>.</span>
  <span class="ev">=</span>
  <span class="op">x</span>
</div>

  <p><a href="/portfolio">Back to Portfolio</a></p>

  <script>
    window.onload = function() {
  var buttons = document.getElementsByTagName('span'), //select all buttons
    result = document.querySelectorAll('.result p')[0], //select the result-field
    clear = document.getElementsByClassName('clear')[0]; //select the All-Clear button
    // This function will loop through all the buttons to add onclick-event
    // If the inside of that button is NOT '=' , then we will
    // add the onclick-function: addValue(i). 
    // If it is '=', then add the onclick-function: calculate(i)
  for (var i = 0; i < buttons.length; i++) {
    if (buttons[i].innerHTML === "=") {
      buttons[i].addEventListener("click", calculate(i));
    } else {
      buttons[i].addEventListener("click", addValue(i));
    }
  }
  clear.onclick = function() {
    result.innerHTML = '';
  };
      //So what addValue(i) does is pretty simple: the function just adds the clicked value to the 'result'-div:
      // We need to replace the '÷' and 'x' symbols,
      // because JS can't calculate with it. The if-statement replaces
      // those symbols with a correct symbol.
  function addValue(i){
    return function() {
      if (buttons[i].innerHTML === '÷') {
        result.innerHTML += "/";
      } else if (buttons[i].innerHTML === 'x') {
        result.innerHTML += "*";
      } else {
        result.innerHTML += buttons[i].innerHTML;
      }
    };
  }
  function calculate(i) {
    return function() {
      result.innerHTML = eval(result.innerHTML);
    };
  }
};
  </script>
</div>
</body>
</html>