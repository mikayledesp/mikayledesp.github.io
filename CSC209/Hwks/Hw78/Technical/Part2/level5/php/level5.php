<?php
$imgDir = 'images/';
$imgArray = glob($imgDir . '*.JPG');
$imgNames = [];

foreach ($imgArray as $image) {
    $fileName = basename($image);  
    $nameOnly = pathinfo($fileName, PATHINFO_FILENAME);  
    $imgNames[] = $nameOnly;
}


$imgCount = count($imgNames);

$currentSlide = isset($_GET['slide']) ? $_GET['slide'] : 1;
$currentSlide = max(1, min($currentSlide, $imgCount)); 

// Generate HTML for slides
$slidesHtml = "";
for ($i = 0; $i < $imgCount; $i++) {
    if ($i + 1 == $currentSlide) {
        $displayStyle = 'block';
    } else {
        $displayStyle = 'none';
    }
    $slidesHtml .= "<div class='mySlides' style='display: $displayStyle'>
                        <div class='numbertext'>" . ($i + 1) . " / $imgCount</div>
                        <img src='$imgDir{$imgNames[$i]}.JPG' alt='{$imgNames[$i]}' />
                    </div>";
}

// Generate HTML for the dots navigation
$dotsHtml = "";
for ($i = 1; $i <= $imgCount; $i++) {
    if ($i == $currentSlide) {
        $activeClass = 'active';
    } else {
        $activeClass = '';
    }
    $dotsHtml .= "<span class='dot $activeClass' onclick='location.href=\"?slide=$i\"'></span>";
}
?>