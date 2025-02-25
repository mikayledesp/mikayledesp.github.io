   
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


