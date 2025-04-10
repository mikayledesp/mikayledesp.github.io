
<?php
// Directory with the images
$imgDir = 'images/';

// getting folder names 
$folders = array_filter(glob($imgDir . '*'), 'is_dir');

// Getting the selected folder from button in html
$selectedFolder = $_GET['folder'] ?? basename($folders[0]);

if (!in_array($imgDir . $selectedFolder, $folders)) {
    $selectedFolder = basename($folders[0]);
}

// get pics from that folder
$imgArray = glob($imgDir . $selectedFolder . '/*.JPG');
$imgNames = [];

foreach ($imgArray as $image) {
    $imgNames[] = pathinfo(basename($image), PATHINFO_FILENAME);
}

// Total number of images
$imgCount = count($imgNames);


$currentSlide = $_GET['slide'] ?? 1;
$currentSlide = max(1, min($currentSlide, $imgCount));

// generate html with caption as well using the image names
$slidesHtml = "";
for ($i = 0; $i < $imgCount; $i++) {
    if ($i + 1 == $currentSlide) {
        $displayStyle = 'block';
    } else {
        $displayStyle = 'none';
    } 
    // create caption from file name
    $caption = ucfirst(str_replace('-', ' ', $imgNames[$i]));  
    $slidesHtml .= "<div class='mySlides' style='display: $displayStyle'>
                        <div class='numbertext'>" . ($i + 1) . " / $imgCount</div>
                        <img src='$imgDir$selectedFolder/{$imgNames[$i]}.JPG' alt='{$imgNames[$i]}' />
                        <div class='caption'>$caption</div>  <!-- Caption below the image -->
                    </div>";
}

// generate html with caption as well using the image names 
$dotsHtml = "";
for ($i = 1; $i <= $imgCount; $i++) {
    if ($i == $currentSlide) {
        $activeClass = 'active';
    } else {
        $activeClass = '';
    }
    $dotsHtml .= "<span class='dot $activeClass' onclick='location.href=\"?folder=$selectedFolder&slide=$i\"'></span>";
}
?>