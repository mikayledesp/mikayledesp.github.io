<?php
function imgGenerate() {
    $imgArray = glob(__DIR__ . "/../images/*.JPG");

    foreach ($imgArray as $image) {
        $img = "images/" . basename($image);
        $idName = basename($image, ".JPG");
        echo "<img id='$idName'src='$img' alt='Gallery Image'>";
    }
}
?>
