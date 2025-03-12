# Hw 4 & 5 Notes Animation

## Notes on JS animations
 1) create functions to move the specific elements created in the html file 
 2) establisg the positions using a variable and  clearInterval 


Example function

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




## Notes on Using DOM / HTML

1) Write draw functions using ctx.
This is an example of being able to draw circles 

 function drawCircle(x, y, color){
    ctx.beginPath();
    ctx.arc(x, y, 10, 0, Math.PI * 2);
    ctx.strokeStyle = color;
    ctx.lineWidth = 2;
    ctx.stroke();
}


2) Then use constructor like fucntion to feed in data used for drawing(x, y, color, velocity)

Example: 
let pointsList = [];
function generateRandomPoints() {
    const n = parseInt(numPointsInput.value);
    pointsList = [];
    
    for (let i = 0; i < n; i++) {
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        // 
        pointsList.push({
            x: x,
            y: y,
            initalX: x,
            initalY: y,
            color: getRandomColor(),
            velocity: { x: velocity(), y: velocity()}
        });
    }
    draw();
}