<?php

$uname = $_POST["uname"];
$title = $_POST["title"];
$text = $_POST["text"];


// Path to the user's folder and user file
$user_dir = "../outputFinal/$uname";
$user_file_path = "$user_dir/user.json";

// If the user file exists, load existing data
if (file_exists($user_file_path)) {
    $user_data = json_decode(file_get_contents($user_file_path));
    print_r($user_data);
    $post_data = [
        "title" => $title,
        "text" => $text
        
        
    ];
    array_push($user_data->entries, $post_data);
    file_put_contents($user_file_path, json_encode($user_data));
} else {
    echo "File Doesnt exist";
}

 header("Location: ../loggedview/mainPage.html.php");  
 exit();

?>
