function moveRed() {   
    var redSquare = document.getElementById("redSq");   
    var redPos = 0;
    var speed = parseInt(document.getElementById("redSpeed").value); 
   var redStepId = setInterval(stepRed, speed);

    function stepRed() {
        if (redPos >= 350) {
            clearInterval(redStepId); 
        } else {
            redPos++; 
            redSquare.style.top = redPos + 'px'; 
            redSquare.style.left = redPos + 'px';
        }
    }
}

function moveBlue() {  
    var blueSquare = document.getElementById("blueSq");
    var bluePos = 350;
    var speed = parseInt(document.getElementById("blueSpeed").value); 

    var blueStepId = setInterval(stepBlue, speed); 

    function stepBlue() {
        if (bluePos == 125) {
            clearInterval(blueStepId); 
        } else {
            bluePos--;
            blueSquare.style.top = bluePos + 'px';
            blueSquare.style.left = bluePos + 'px';
        }
    }
}

function movePurple() {  
    var purpleSquare = document.getElementById("purpleSq");
    var purplePos = 150;
    var speed = parseInt(document.getElementById("purpleSpeed").value); 

    clearInterval(purpleStepId); 
    var purpleStepId = setInterval(stepPurple, speed); 

    function stepPurple() {
        if (purplePos == 0) {
            clearInterval(purpleStepId); 
        } else {
            purplePos--;
            purpleSquare.style.top = purplePos + 'px';
            purpleSquare.style.left = purplePos + 'px';
        }
    }
}

function movePink() {  
    var pinkSquare = document.getElementById("pinkSq");
    var pinkPos = 0;
    var speed = parseInt(document.getElementById("pinkSpeed").value); 

    clearInterval(pinkStepId); 
    var pinkStepId = setInterval(stepPink, speed); 

    function stepPink() {
        if (pinkPos == 350) {
            clearInterval(pinkStepId); 
        } else {
            pinkPos++;
            pinkSquare.style.bottom = pinkPos + 'px';
            pinkSquare.style.left = pinkPos + 'px';
        }
    }
}

function moveAll(){
    moveBlue();
    movePink();
    moveRed();
    movePurple();
}

function toggleTheme() {
    let theme = document.getElementById('theme');
    console.log("Current theme href:", theme.getAttribute('href'));
  
    if (theme.getAttribute('href') === 'css/creative.css') {
      theme.setAttribute('href', 'css/creativeDark.css');
    } else {
      theme.setAttribute('href', 'css/creative.css');
    }
  
    console.log("New theme href:", theme.getAttribute('href'));
  }