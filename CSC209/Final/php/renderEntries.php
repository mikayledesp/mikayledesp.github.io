<!-- Php -->
<?php

$title = $_POST["title"];
$text = $_POST["text"];
$author = $_POST["author"];

// path 2 json file
$file_path = "../outputFinal/".$author."/posts.json";

// create directory if it doesnt exis
if (!file_exists(dirname($file_path))) {
    mkdir(dirname($file_path), 0777, true); // Creates the folder with full permissions
}

// if file oesnt exist 
if (file_exists($file_path)) {
    $existing_data = file_get_contents($file_path);
    $posts = json_decode($existing_data, true); // decode into an array
} else {
    // initialize empty array if file doesn't exist
    $posts = []; 
}

// adding new posts 
$new_post = [
    "title" => $title,
    "text" => $text,
    "author" => $author
];
$posts[] = $new_post;

// saving upated users to file 
file_put_contents($file_path, json_encode($posts)); 
header("location:../mainPage.html.php");  
exit();
?>