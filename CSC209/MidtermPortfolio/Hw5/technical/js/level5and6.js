    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    const generatePointsBtn = document.getElementById("generatePoints");
    const startAnimationBtn = document.getElementById("startAnimation");

    let points = [];

    function generateRandomPoints() {
        points = [];
        for (let i = 0; i < NRPTS; i++) {
            points.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
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

    // function to draw circles
    function drawCircle(x, y, color) {
        ctx.beginPath();
        ctx.arc(x, y, 10, 0, Math.PI * 2);
        ctx.strokeStyle = color;
        ctx.lineWidth = 2;
        ctx.stroke();
    }

    // function to lines 
    function drawVector(x, y, vx, vy, color) {
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
        points.forEach(point => {
            drawVector(point.x, point.y, point.velocity.x, point.velocity.y, point.color);
            drawCircle(point.x, point.y, point.color);
        });
    }

    // animate function
    function animateMotion() {
        let step = 0;
        
        let interval = setInterval(() => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);  
            points.forEach(point => {
                //pushes the point in direction of velocity vector
                point.x += point.velocity.x;
                point.y += point.velocity.y;
    
                drawVector(point.x, point.y, point.velocity.x, point.velocity.y, point.color);
                drawCircle(point.x, point.y, point.color);
            });
    
            // loop stops after step is lareger than NRSTEPS
            if (step++ >= NRSTEPS) {
                clearInterval(interval); 
                return;
            }
    
        }); 
    }
    
    

    // added event listener to the buttons 
    generatePointsBtn.addEventListener("click", generateRandomPoints);
    startAnimationBtn.addEventListener("click", animateMotion);

    generateRandomPoints();

