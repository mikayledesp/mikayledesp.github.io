    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");

    // Points data: each point has x, y, color, and velocity
    let points = [
        { x: 100, y: 100, color: "red", velocity: { x: 60, y: 30 } },
        { x: 200, y: 200, color: "green", velocity: { x: 40, y: 50 } },
        { x: 300, y: 300, color: "blue", velocity: { x: 30, y: 40 } }
    ];


    // Function to draw a hollow circle (outline) for each point
    function drawCircle(x, y, color) {
        ctx.beginPath();
        ctx.arc(x, y, 10, 0, Math.PI * 2);
        ctx.strokeStyle = color; // Outline color
        ctx.lineWidth = 2;
        ctx.stroke();
    }

    // Function to draw the vector for each point
    function drawVector(x, y, velocityx, velocityy, color) {
        let endX = x + velocityx;
        let endY = y + velocityy;

        // Draw main vector line
        ctx.beginPath();
        ctx.moveTo(x, y);
        ctx.lineTo(endX, endY);
        ctx.strokeStyle = color;
        ctx.lineWidth = 2;
        ctx.stroke();
    }

    // Function to update the scene with all points and vectors
    function drawScene() {
        points.forEach(point => {

            let velocityx = point.velocity.x * 0.3;
            let velocityy = point.velocity.y * 0.3;

            drawCircle(point.x, point.y, point.color);
            drawVector(point.x, point.y, velocityx, velocityy, point.color);
        });
    }

 
    drawScene();

