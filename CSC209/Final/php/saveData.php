<?php
 session_start();
$uname = $_POST["uname"];
$title = $_POST["title"];
$text = $_POST["text"];
echo "<h2>Welcome " . $uname . "!</h2>";

$file_path = "../outputFinal/users.json";

// Create directory if it doesn't exist
if (!file_exists(dirname($file_path))) {
    mkdir(dirname($file_path), 0777, true); // Creates the folder with full permissions
}

// If file exists, retrieve users
if (file_exists($file_path)) {
    $existing_data = file_get_contents($file_path);
    $users = json_decode($existing_data, true); // decode into an array
} else {
    $users = []; // Initialize empty array if file doesn't exist
}

// Adding new users if they do not exist
$new_user = [
    "uname" => $uname,
    "pword" => "", // Adjust this as needed if password management is required
    "posts" => []
];

// Check if the user already exists
$existing_user = null;
foreach ($users as $user) {
    if ($user['uname'] === $uname) {
        $existing_user = $user;
        break;
    }
}

if (!$existing_user) {
    $users[] = $new_user;
    file_put_contents($file_path, json_encode($users)); // Save updated user list
}

// Function to store posts
function storePosts($uname, $title, $text) {
    global $users;
    $post = [
        "title" => $title,
        "text" => $text,
        "timestamp" => date("Y-m-d H:i:s")
    ];

    // Find the user and add the post
    foreach ($users as &$user) {
        if ($user['uname'] === $uname) {
            $user['posts'][] = $post; // Add new post to user's posts array
            break;
        }
    }

    // Save updated users data with the new post
    file_put_contents("../outputFinal/users.json", json_encode($users, JSON_PRETTY_PRINT));
}

// Call storePosts if post data is submitted
if (isset($_POST["title"]) && isset($_POST["text"])) {
    storePosts($uname, $title, $text);
    echo "<h3>Post added successfully!</h3>";
}
header("Location:../loggedview/loggedinmainPage.html.php");
exit();
?>
