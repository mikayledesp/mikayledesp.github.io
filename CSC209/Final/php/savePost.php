<?php
// Handle Post Data
$title = $_POST["title"];
$text = $_POST["text"];
$author = $_POST["author"] !== "" ? $_POST["author"] : "Anonymous";

// Path to the author's user file
$user_dir = "../outputFinal/$author";
$user_file_path = "$user_dir/user.json";

// Check if the user file exists
if (file_exists($user_file_path)) {
    $user_data = json_decode(file_get_contents($user_file_path), true);
} else {
    // If somehow missing, create new basic user data
    $user_data = [
        "uname" => $author,
        "pword" => "", // unknown password
        "posts" => []
    ];
}

// Add the new post to the user's posts
$new_post = [
    "title" => $title,
    "text" => $text,
    "author" => $author
];
$user_data["posts"][] = $new_post;

// Save back to the user file
file_put_contents($user_file_path, json_encode($user_data));

// (Optional: redirect somewhere after posting)
header("Location:../mainPage.html.php");
exit();
?>
