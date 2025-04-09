
<?php
// Directory where image folders are located
$imgDir = 'images/';

// Fetch all folder names (directories within the 'images' folder)
$folders = array_filter(glob($imgDir . '*'), 'is_dir');

// Get the selected folder from the URL, or default to the first folder
$selectedFolder = isset($_GET['folder']) ? $_GET['folder'] : basename($folders[0]);

// Ensure the selected folder exists
if (!in_array($imgDir . $selectedFolder, $folders)) {
    $selectedFolder = basename($folders[0]);  // Default to the first folder if invalid folder selected
}

// Fetch images from the selected folder
$imgArray = glob($imgDir . $selectedFolder . '/*.JPG');
$imgNames = [];

foreach ($imgArray as $image) {
    $imgNames[] = pathinfo(basename($image), PATHINFO_FILENAME);
}

// Total number of images
$imgCount = count($imgNames);


$currentSlide = isset($_GET['slide']) ? $_GET['slide'] : 1;
$currentSlide = max(1, min($currentSlide, $imgCount)); 

// generate html with caption as well using the image names 
$slidesHtml = "";
for ($i = 0; $i < $imgCount; $i++) {
    $displayStyle = ($i + 1 == $currentSlide) ? 'block' : 'none';  
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
    $activeClass = ($i == $currentSlide) ? 'active' : '';
    $dotsHtml .= "<span class='dot $activeClass' onclick='location.href=\"?folder=$selectedFolder&slide=$i\"'></span>";
}
?>