<!DOCTYPE html>
<html>
<head>
    <title>Admin View</title>
    <link rel="stylesheet" href="css/technical.css">
</head>
<body>
<h1>Admin View</h1>


<?php
function countUsers() {
    $file_path = "outputCreative/users.json";

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

            echo "<h3> Total Users: </h3><center>" . $count . "<center><br>";
            // actaully prints out the usernames if there are any
            if ($count > 0) {
                echo "<p> Usernames: </p>";
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
<br>
<br>
<a id="back-to-login"href="functionalForm.html.php">Back to Login</a>

</body>
</html>
