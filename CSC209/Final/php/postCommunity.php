<?php

// Get the posted form values
$uname = $_POST["uname"];  // Author name
$title = $_POST["title"];  // Post title
$text = $_POST["text"];    // Post content

// Path to the community posts file
$community_file_path = "../outputFinal/community.json";

// Create a new post
$post_data = [
    "title" => $title,
    "text" => $text,
    "author" => $uname,
    "timestamp" => time()
];

// Check if the file exists
if (file_exists($community_file_path)) {
    $community_data = json_decode(file_get_contents($community_file_path));
    if (!is_array($community_data)) {
        $community_data = [];  // Safety check if the file somehow breaks
    }
} else {
    $community_data = [];  // If file doesn't exist, start a new array
}

// Add the new post to the beginning
array_unshift($community_data, $post_data);

// Save the updated posts
file_put_contents($community_file_path, json_encode($community_data, JSON_PRETTY_PRINT));

// Redirect back to the community page
header("Location: ../loggedview/communityPosts.html.php");
exit();

?>
