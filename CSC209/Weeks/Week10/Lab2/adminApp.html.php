<!DOCTYPE html>
<html>
<head>
    <title>Admin View</title>
</head>
<body>
<?php 
$path = realpath("../");
echo "<h1>".basename($path) ."</h1>";
?>
<h1>Admin View</h1>


<?php
function countUsers() {
    $file_path = "lab2Output/users.json";

    // checking if file exists 
    if (file_exists($file_path)) {
        // read the whole file
        $file_content = file_get_contents($file_path);

        // decode the JSON array of users
        // true makes it into an array
        $users = json_decode($file_content, true); 

        // counts all the users in the array
        if (is_array($users)) {
            $count = count($users);

            echo "Total Users: " . $count . "<br>";
            // actaully prints out the usernames if there are any
            if ($count > 0) {
                echo "Usernames:<br>";
                foreach ($users as $user) {
                    if (isset($user["uname"])) {
                        echo $user["uname"] . "<br>";
                    }
                }
            }
        }
    } else {
        // prints out error 
        echo " EROR: FILE DOES NOT EXIST";
    }
}


countUsers();
?>


</body>
</html>
