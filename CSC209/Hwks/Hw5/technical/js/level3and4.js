    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    const generateBtn = document.getElementById("generate");

    let points = [];

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function getRandomColor() {
        const colors = ["red", "green", "blue", "purple", "orange", "pink"];
        return colors[Math.floor(Math.random() * colors.length)];
    }

    function generateRandomPoints() {
        points = [];
        for (let i = 0; i < NRPTS; i++) {
            points.push({
                x: getRandomInt(50, canvas.width - 50),
                y: getRandomInt(50, canvas.height - 50),
                color: getRandomColor(),
                velocity: { 
                    x: getRandomInt(-50, 50), 
                    y: getRandomInt(-50, 50) 
                }
            });
        }
        draw();
    }

    function drawCircle(x, y, color) {
        ctx.beginPath();
        ctx.arc(x, y, 10, 0, Math.PI * 2);
        ctx.strokeStyle = color;
        ctx.lineWidth = 2;
        ctx.stroke();
    }

    function drawVector(x, y, velocityx, velocityy, color) {
        ctx.beginPath();
        ctx.moveTo(x, y);
        ctx.lineTo(x + velocityx, y + velocityy);
        ctx.strokeStyle = color;
        ctx.lineWidth = 2;
        ctx.stroke();
    }

    function draw() {
        points.forEach(point => {
            let velocityx = point.velocity.x * 0.5;
            let velocityy = point.velocity.y * 0.5;
            drawCircle(point.x, point.y, point.color);
            drawVector(point.x, point.y, velocityx, velocityy, point.color);
        });
    }