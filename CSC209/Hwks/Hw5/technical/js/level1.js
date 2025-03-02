const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");
canvas.height = canvas.width;
ctx.transform(1, 0, 0, -1, 0, canvas.height)