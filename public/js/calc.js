window.onload = function() {
  //Global variables:
  var buttons = document.getElementsByTagName('span'), //selects ALL BUTTONS
    result = document.querySelectorAll('.result p')[0], //selects RESULT FIELD
    clear = document.getElementsByClassName('clear')[0]; //selects CLEAR BUTTON
  
    /* The following function loops through all buttons to add an on-click event.
      If the inside of that button is NOT '=' , then we will add the onclick-function: addValue(i). 
      If it is '=', then we add the onclick-function: calculate(i) */
  
  for (var i = 0; i < buttons.length; i++) {
    if (buttons[i].innerHTML === "=") {
      buttons[i].addEventListener("click", calculate(i));
    } else {
      buttons[i].addEventListener("click", addValue(i));
    }
  }
  //This deletes the content in the result field.
  clear.onclick = function() {
    result.innerHTML = '';
  };
      /* So what addValue(i) does is pretty simple: the function just adds the clicked value to the 'result' div.
      Note:  We need to replace the '÷' and 'x' symbols, because JS can't calculate with them. The if-statement replaces those symbols with the correct symbol. */
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
  //This function will evaluate the contents in the result field. 
  function calculate(i) {
    return function() {
      result.innerHTML = eval(result.innerHTML);
    };
  }
};