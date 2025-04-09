<?php include "php/level7.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Slideshow</title>
    <link rel="stylesheet" href="css/level7.css">
</head>
<body>
<h1>Mikayle's Photo Collection!</h1>
<!-- slideshow container -->
<div class="slideshow-container">
    <?= $slidesHtml ?>
    <a class="prev" href="?folder=<?= $selectedFolder ?>&slide=<?php echo ($currentSlide == 1) ? $imgCount : $currentSlide - 1; ?>">&#10094;</a>
    <a class="next" href="?folder=<?= $selectedFolder ?>&slide=<?php echo ($currentSlide == $imgCount) ? 1 : $currentSlide + 1; ?>">&#10095;</a>
</div>

<!-- dots navigation -->
<div id="dots" style="text-align:center">
    <?= $dotsHtml ?>
</div>

<!-- menu for folders -->
<div id="menu">
    <?php foreach ($folders as $folder) : ?>
        <a href="?folder=<?= basename($folder) ?>"><?= basename($folder) ?></a>
        <?php endforeach; ?>
</div>
</body>
</html>
