<?php
function imgGenerate() {
    $imgArray = glob(__DIR__ . "/../images/*.{jpg,JPG}", GLOB_BRACE);  // Absolute path for PHP
    $imgNames = [];

    foreach ($imgArray as $image) {
        $fileName = basename($image);  // e.g., "photo.JPG"
        $nameOnly = pathinfo($fileName, PATHINFO_FILENAME);  // e.g., "photo"
        $imgNames[] = $nameOnly;
    }

    echo "<script>";
    echo "var imgNames = " . json_encode($imgNames) . ";";
    echo "const NUM_IMAGES = imgNames.length;";
    echo "</script>";
}
?>
