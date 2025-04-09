<?php include "php/level5.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Slideshow</title>
    <link rel="stylesheet" href="css/level5.css">
</head>
<body>

<!-- slideshow container -->
<div class="slideshow-container">
    <?= $slidesHtml ?>
    <a class="prev" href="?slide=<?php echo ($currentSlide == 1) ? $imgCount : $currentSlide - 1; ?>">&#10094;</a>
    <a class="next" href="?slide=<?php echo ($currentSlide == $imgCount) ? 1 : $currentSlide + 1; ?>">&#10095;</a>
</div>

<!-- dots container -->
<div id="dots" style="text-align:center">
    <?= $dotsHtml ?>
</div>

</body>
</html>
