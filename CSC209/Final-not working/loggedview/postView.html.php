<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: ../loginPage.php");
    exit();
}

$username = $_SESSION["username"];
$title = $text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $text = $_POST["text"];
    
    $file_path = "../outputFinal/users.json";

    if (file_exists($file_path)) {
        $existing_data = file_get_contents($file_path);
        $users = json_decode($existing_data, true);
    } else {
        $users = [];
    }

    // Add the post to the user's data
    foreach ($users as &$user) {
        if ($user['uname'] === $username) {
            $user['posts'][] = [
                'title' => $title,
                'text' => $text,
                'timestamp' => date("Y-m-d H:i:s")
            ];
            break;
        }
    }

    // Save the updated users data
    file_put_contents($file_path, json_encode($users, JSON_PRETTY_PRINT));

    // Redirect to the main page to show updated posts
    header("Location: mainPage.html.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post an Entry</title>
</head>
<body>
    <h1>Post a New Entry</h1>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required><br><br>
        <label for="text">Text:</label>
        <textarea id="text" name="text" required><?php echo htmlspecialchars($text); ?></textarea><br><br>
        <button type="submit">Post Entry</button>
    </form>
</body>
</html>
