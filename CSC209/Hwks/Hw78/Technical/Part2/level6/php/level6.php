
<?php
// Directory with the images
$imgDir = 'images/';
$imgArray = glob($imgDir . '*.JPG');
$imgNames = [];

foreach ($imgArray as $image) {
    $fileName = basename($image);  
    $nameOnly = pathinfo($fileName, PATHINFO_FILENAME);  
    $imgNames[] = $nameOnly;
}

// Total number of images
$imgCount = count($imgNames);


$currentSlide = isset($_GET['slide']) ? $_GET['slide'] : 1;
$currentSlide = max(1, min($currentSlide, $imgCount)); 

// generate html with caption as well using the image names 
$slidesHtml = "";
for ($i = 0; $i < $imgCount; $i++) {
    $displayStyle = ($i + 1 == $currentSlide) ? 'block' : 'none'; 
    $caption = ucfirst(str_replace('-', ' ', $imgNames[$i]));  
    $slidesHtml .= "<div class='mySlides' style='display: $displayStyle'>
                        <div class='numbertext'>" . ($i + 1) . " / $imgCount</div>
                        <img src='$imgDir{$imgNames[$i]}.JPG' alt='{$imgNames[$i]}' />
                        <div class='caption'>$caption</div> 
                    </div>";
}

// generate html with caption as well using the image names 
$dotsHtml = "";
for ($i = 1; $i <= $imgCount; $i++) {
    $activeClass = ($i == $currentSlide) ? 'active' : '';
    $dotsHtml .= "<span class='dot $activeClass' onclick='location.href=\"?slide=$i\"'></span>";
}
?>