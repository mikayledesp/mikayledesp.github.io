<?php

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

    // Check if the password matches
    if ($user_data["pword"] !== $pword_raw) {
        // If pword doesnt match, show alert and redirect back to loginpage
        echo '<script>
            alert("Incorrect password.");
            window.history.back(); // Go back to the previous page
        </script>';
        exit();
    }
} else {
    // Else just create user data 
    $user_data = [
        "uname" => $uname,
        "pword" => $pword_raw,
        "entries" => [] 
    ];
    file_put_contents($user_file_path, json_encode($user_data));
}
?>
<!doctype html>
<html lang="en">
<head></head>
<body>
<script>
    window.localStorage.setItem("uname", "<?php echo $uname ?>");
    window.location.href = "../loggedview/mainPage.html.php";
</script>
</body>
</html>

