
<?php
$uname = $_POST["uname"];
$pword = $_POST["pword"];
echo "Welcome " . $uname . "!";

// path 2 json file
$file_path = "../outputCreative/users.json";

// create directory if it doesnt exis
if (!file_exists(dirname($file_path))) {
    mkdir(dirname($file_path), 0777, true); // Creates the folder with full permissions
}

// if file oesnt exist 
if (file_exists($file_path)) {
    $existing_data = file_get_contents($file_path);
    $users = json_decode($existing_data, true); // decode into an array
} else {
    $users = []; // Initialize empty array if file doesn't exist
}

// adding new users 
$new_user = [
    "uname" => $uname,
    "pword" => $pword
];
$users[] = $new_user;

// saving upated users to file 
file_put_contents($file_path, json_encode($users));

function storePosts(){
    
}
?>
