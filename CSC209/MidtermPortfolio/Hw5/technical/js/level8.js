const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
const numPointsInput = document.getElementById("numPoints");

let points = [];

function generateRandomPoints() {
    const n = parseInt(numPointsInput.value);
    points = [];
    
    for (let i = 0; i < n; i++) {
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        // 
        points.push({
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

function velocity(){
     // makes range for velocity from 4 to 4 to make  random velocities  
    return (Math.random() - 0.5) * 8;
}

 // function to generate colors
function getRandomColor() {
    const colors = ["red", "green", "blue", "purple", "orange", "pink"];
    return colors[Math.floor(Math.random() * colors.length)];
}

function drawCircle(x, y, color) {
    ctx.beginPath();
    ctx.arc(x, y, 10, 0, Math.PI * 2);
    ctx.strokeStyle = color;
    ctx.lineWidth = 2;
    ctx.stroke();
}

function drawVector(x, y, vx, vy, color) {
    // multiplying by 10 bcxs the vectors were too short to see
    let endX = x + vx * 10;
    let endY = y + vy * 10;
    ctx.beginPath();
    ctx.moveTo(x, y);
    ctx.lineTo(endX, endY);
    ctx.strokeStyle = color;
    ctx.lineWidth = 2;
    ctx.stroke();
}
// function to draw both circles and vectors 
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    points.forEach(point => {
        drawVector(point.x, point.y, point.velocity.x, point.velocity.y, point.color);
        drawCircle(point.x, point.y, point.color);
    });
}

function animateMotion() {
    let step = 0;

    const interval = setInterval(() => {
        points.forEach(point => {
            //pushes the point in direction of velocity vector
            point.x += point.velocity.x;
            point.y += point.velocity.y;
        });
        draw();
        step++;
        if (step >= NRSTEPS) {
            clearInterval(interval);
        }
    },);
}

function resetAnimation() {
    points.forEach(point => {
        // resets the points to the initial y and x coordinates
        point.x = point.initalX;
        point.y = point.initalY;
    });
    draw();
}

generateRandomPoints();
