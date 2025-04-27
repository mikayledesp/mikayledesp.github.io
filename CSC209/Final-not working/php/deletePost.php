<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location:../loginPage.php");
    exit();
}

$username = $_SESSION["username"];
$file_path = "../outputFinal/users.json";

// Load the users data
if (file_exists($file_path)) {
    $existing_data = file_get_contents($file_path);
    $users = json_decode($existing_data, true);
} else {
    $users = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["post_index"])) {
    $post_index = $_POST["post_index"];

    // Find and delete the post
    foreach ($users as &$user) {
        if ($user['uname'] === $username) {
            unset($user['posts'][$post_index]);
            break;
        }
    }

    // Save the updated users data
    file_put_contents($file_path, json_encode($users, JSON_PRETTY_PRINT));

    // Redirect to the main page
    header("Location:../loggedview/mainPage.html.php");
    exit();
}
