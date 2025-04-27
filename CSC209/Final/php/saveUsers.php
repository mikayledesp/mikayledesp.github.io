<?php
// Handle User Data (Login Process)
$uname = $_POST["uname"];
$pword_raw = $_POST["pword"];

// Path to the user's folder and user file
$user_dir = "../outputFinal/$uname";
$user_file_path = "$user_dir/user.json";

// Create user directory if it doesn't exist
if (!file_exists($user_dir)) {
    mkdir($user_dir, 0777, true);
}

// If the user file exists, load existing data
if (file_exists($user_file_path)) {
    $user_data = json_decode(file_get_contents($user_file_path), true);
} else {
    // Create a new user file
    $user_data = [
        "uname" => $uname,
        "pword" => password_hash($pword_raw, PASSWORD_DEFAULT), // Securely hashed password
        "posts" => [] // Start with empty posts array
    ];
    file_put_contents($user_file_path, json_encode($user_data));
}

// Redirect to the main page
header("Location: ../loggedview/loggedInmainPage.html.php");  
exit();
?>
