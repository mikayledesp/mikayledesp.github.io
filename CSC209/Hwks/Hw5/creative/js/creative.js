const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
const numPointsInput = document.getElementById("numPoints");
const traceToggle = document.getElementById("traceToggle");

// list to store stars
let pointsList = [];


function generateRandomPoints() {
    const n = parseInt(numPointsInput.value);
    pointsList = [];
    
    for (let i = 0; i < n; i++) {
        const x = Math.random() * canvas.width;
        // starts at y so it starts towards the top
        const y = 10; 
        pointsList.push({
            x: x,
            y: y,
            initialX: x,
            initialY: y,
            color: getRandomColor(),
            velocity: { 
                x: (Math.random() * 6) + 4, 
                y: (Math.random() * 6) + 4  
            }
        });
    }
    draw();
}

// random color between yellow and white
function getRandomColor() {
    return Math.random() < 0.5 ? "yellow" : "white";
}

// draws emoticon stars 
function draw() {
    if (!traceToggle.checked) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    
    ctx.font = "35px Arial";  
    ctx.textAlign = "center";

    pointsList.forEach(point => {
        ctx.fillStyle = point.color; 
        ctx.fillText("★", point.x, point.y);
    });
}

// animates the shooting stars
function animateMotion() {
    let step = 0;
    const interval = setInterval(() => {
        pointsList.forEach(point => {
            //pushes the point in direction of velocity vector
            point.x += point.velocity.x;
            point.y += point.velocity.y;
            // handles edgecases of off screen stars 
            if (point.x > canvas.width || point.y > canvas.height) {
                point.x = Math.random() * canvas.width;
                point.y = 0;
            }
        });
        draw();
        step++;
        if (step >= NRSTEPS) { 
            clearInterval(interval);
        }
    });
}

// resets animation
function resetAnimation() {
    pointsList.forEach(point => {
        // resets the points to the initial y and x coordinates
        point.x = point.initialX;
        point.y = point.initialY;
    });
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    draw();
}

generateRandomPoints();
