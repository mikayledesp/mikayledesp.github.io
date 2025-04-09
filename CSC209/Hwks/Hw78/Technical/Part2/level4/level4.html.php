<?php include "php/level4.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Slideshow</title>
    <link rel="stylesheet" href="css/level4.css">
    <?php imgGenerate(); ?>
</head>
<body>

<div class="slideshow-container">
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>
<div id="dots" style="text-align:center"></div>

<script src="js/level4.js"></script>
</body>
</html>
