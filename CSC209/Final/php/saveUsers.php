<?php


// Handle User Data (Login Process)
$uname = $_POST["uname"];
$pword = $_POST["pword"];

// Path to the centralized users file
$users_file_path = "../outputFinal/users.json";

// Create directory if it doesn't exist
if (!file_exists(dirname($users_file_path))) {
    mkdir(dirname($users_file_path), 0777, true);
}

// If the users file exists, fetch existing data; otherwise, initialize an empty array
if (file_exists($users_file_path)) {
    $existing_users_data = file_get_contents($users_file_path);
    $users = json_decode($existing_users_data, true); // Decode into an array
} else {
    $users = [];
}

// Check if the user exists, if not, add them to the users list
$user_exists = false;
foreach ($users as $user) {
    if ($user['uname'] === $uname) {
        $user_exists = true;
        break;
    }
}

if (!$user_exists) {
    // Add new user
    $new_user = [
        "uname" => $uname,
        "pword" => $pword // Use hashed passwords for security
    ];
    $users[] = $new_user;

    // Save the updated users array to the users file
    file_put_contents($users_file_path, json_encode($users));
}

// Redirect to the main page
header("location:../loggedview/loggedInmainPage.html.php");  
exit();
?>