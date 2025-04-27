<?php
// storing all the inouts from forms 
$uname = $_POST["uname"];
$pword = $_POST["pword"];
$title = $_POST["title"];
$text = $_POST["text"];

$file_path = "../outputFinal/users.json";

// Create directory if it doesn't exist
if (!file_exists(dirname($file_path))) {
    mkdir(dirname($file_path), 0777, true);
}

// If file exists, retrieve users
if (file_exists($file_path)) {
    $existing_data = file_get_contents($file_path);
    $users = json_decode($existing_data, true);
} else {
    $users = [];
}

// Adding new users if they do not exist
$existing_user_found = false;
foreach ($users as &$user) { // ← NOW using &
    if ($user['uname'] === $uname) {
        $existing_user_found = true;
        break;
    }
}

// If user not found, add them
if (!$existing_user_found) {
    $users[] = [
        "uname" => $uname,
        "pword" => $pword,
        "posts" => []
    ];
}

// Now store the post
foreach ($users as &$user) { // again reference
    if ($user['uname'] === $uname) {
        $user['posts'][] = [
            "title" => $title,
            "text" => $text,
            "timestamp" => date("Y-m-d H:i:s")
        ];
        break;
    }
}

// Save back the updated data
file_put_contents($file_path, json_encode($users, JSON_PRETTY_PRINT));

// Redirect
header("Location:../loggedview/mainPage.html.php");
exit();
?>
