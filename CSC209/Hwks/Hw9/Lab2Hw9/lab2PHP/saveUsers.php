<?php
$uname = $_POST["uname"];
$pword = $_POST["pword"];
echo "Welcome " . $uname . "!";

// path to json file 
$file_path = "../lab2Output/users.json";

// Step 1: Load existing users (if the file exists)
if (file_exists($file_path)) {
    $existing_data = file_get_contents($file_path);
    // note : need to enclue true to return as an array
    $users = json_decode($existing_data, true); 
} else {
    // makes array itself if theres no file
    $users = []; 
}

// adding username and password
$new_user = [
    "uname" => $uname,
    "pword" => $pword
];
// adds new user to arrat
$users[] = $new_user;

// save updated user list back to the file
file_put_contents($file_path, json_encode($users));
?>
