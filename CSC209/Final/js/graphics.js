const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");
// graphics inspiration from : https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes
function drawHeart(x, y, size, color) {
  ctx.beginPath();
  ctx.moveTo(x, y);
  ctx.bezierCurveTo(x, y - size / 2, x - size, y - size / 2, x - size, y + size / 3);
  ctx.bezierCurveTo(x - size, y + size, x, y + size * 1.5, x, y + size * 2);
  ctx.bezierCurveTo(x, y + size * 1.5, x + size, y + size, x + size, y + size / 3);
  ctx.bezierCurveTo(x + size, y - size / 2, x, y - size / 2, x, y);
  
  ctx.fillStyle = color; 
  ctx.fill();
  ctx.strokeStyle = "darkred";
  ctx.stroke();
  ctx.lineWidth = 2;
  ctx.closePath();
}

drawHeart(250, 150, 50, "pink");
