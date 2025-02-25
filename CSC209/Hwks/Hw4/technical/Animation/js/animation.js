   
function moveRed()
{   
    var redSquare = document.getElementById("redSq");   
    var redPos = 0;
    // setInterval calls a function at specified intervals
    var stepRedId = setInterval(stepRed, 10);

    function stepRed() {
        if (redPos == 350) {
            // clear interval is when it stops 
            clearInterval(stepRedId);
        } else {
            redPos++; 
            redSquare.style.top = redPos + 'px'; 
            redSquare.style.left = redPos + 'px';
        }
    }
}

function moveBlue(){
    
    var blueSquare = document.getElementById("blueSq");
    var bluePos = 350;
    // using the setInterval to increase or decrease speed based on users option choice 
    var stepBlueId = setInterval(stepBlue, 10);

    function stepBlue(){
        if (bluePos == 0){
            clearInterval(stepBlueId);   
        } else{
            // decreasing to head back towards the left side 
            bluePos--;
            // coordinates of the square
            blueSquare.style.top = bluePos + 'px';
            blueSquare.style.left = bluePos + 'px';
        }
    }
}

