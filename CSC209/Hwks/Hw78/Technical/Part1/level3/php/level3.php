<?php
function imgGenerate() {
    $imgArray = glob(__DIR__ . "/../images/*.JPG");

    foreach ($imgArray as $img) {
        $src = "images/" . basename($img);
        echo "<img src='$src' alt='Gallery Image'>";
    }
}
?>
