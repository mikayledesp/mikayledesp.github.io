<!-- office hours question -->
<!-- how can i make it so that only the users posts show up when they log in and not all the posts that show up  -->

<?php
// Handle User Data (Login Process)
$uname = $_POST["uname"];
$pword_raw = $_POST["pword"];

// Path to the user's folder and user file
$user_dir = "../outputFinal/$uname";
$user_file_path = "$user_dir/user.json";
echo $user_file_path;
echo getcwd();
echo "<br>". $uname;

// Create user directory if it doesn't exist
if (!file_exists($user_dir)) {
    mkdir($user_dir, 0777, true);
}else{
    echo file_exists($user_dir);
}
echo "<br>".file_exists($user_file_path);
// If the user file exists, load existing data
if (file_exists($user_file_path)) {
    $user_data = json_decode(file_get_contents($user_file_path), true);
} else {
    // Create a new user file
    $user_data = [
        "uname" => $uname,
        "pword" => $pword_raw,
        "entries" => [] // Start with empty posts array
    ];
    file_put_contents($user_file_path, json_encode($user_data));
}


?>
<!doctype html>
<html lang="en">
    <head></head>
<body>
<script>
    window.localStorage.setItem("uname", "<?php echo $uname?>");
    window.location.href = "../loggedview/mainPage.html.php";
</script>
</body>
</html>
