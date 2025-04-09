<?php
function imgGenerate() {
    $imgArray = glob(__DIR__ . "/../images/*.JPG"); 
    $imgNames = [];

    foreach ($imgArray as $image) {
        $fileName = basename($image);  
        $nameOnly = pathinfo($fileName, PATHINFO_FILENAME);  
        $imgNames[] = $nameOnly;
    }

    echo "<script>";
    echo "var imgNames = " . json_encode($imgNames) . ";";
    echo "const NUM_IMAGES = imgNames.length;";
    echo "</script>";
}
?>
