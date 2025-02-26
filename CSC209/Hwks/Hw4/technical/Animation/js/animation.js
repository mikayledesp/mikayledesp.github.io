function moveRed() {   
    var redSquare = document.getElementById("redSq");   
    var redPos = 0;
    var speed = parseInt(document.getElementById("redSpeed").value); // Get user-selected speed

    clearInterval(redInterval); // Clear any existing red square animation
   var redInterval = setInterval(stepRed, speed); // Apply selected speed

    function stepRed() {
        if (redPos >= 350) {
            clearInterval(redInterval); // Stop when reaching the limit
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
    var speed = parseInt(document.getElementById("blueSpeed").value); // Get user-selected speed

    clearInterval(blueInterval); // Clear any existing blue square animation
    var blueInterval = setInterval(stepBlue, speed); // Apply selected speed

    function stepBlue() {
        if (bluePos <= 0) {
            clearInterval(blueInterval); // Stop when reaching the limit  
        } else {
            bluePos--;
            blueSquare.style.top = bluePos + 'px';
            blueSquare.style.left = bluePos + 'px';
        }
    }
}
