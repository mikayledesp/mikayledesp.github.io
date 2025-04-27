<?php
// Handle Post Data
$title = $_POST["title"];
$text = $_POST["text"];
$author = $_POST["author"] !== "" ? $_POST["author"] : "Anonymous";

// Path to the centralized posts file
$posts_file_path = "../outputFinal/allPosts.json";

// Create directory if it doesn't exist
if (!file_exists(dirname($posts_file_path))) {
    mkdir(dirname($posts_file_path), 0777, true);
}

// If the posts file exists, fetch existing data; otherwise, initialize an empty array
if (file_exists($posts_file_path)) {
    $existing_posts_data = file_get_contents($posts_file_path);
    $posts = json_decode($existing_posts_data, true); // Decode into an array
} else {
    $posts = [];
}

// Add the new post to the array
$new_post = [
    "title" => $title,
    "text" => $text,
    "author" => $author
];
$posts[] = $new_post;

// Save the updated posts array to the posts file
file_put_contents($posts_file_path, json_encode($posts));

?>
