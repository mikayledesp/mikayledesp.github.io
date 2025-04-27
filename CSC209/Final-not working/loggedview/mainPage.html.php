<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: ../loginPage.php");
    exit();
}

$username = $_SESSION["username"];
$file_path = "../outputFinal/users.json";

// Load the users data
if (file_exists($file_path)) {
    $existing_data = file_get_contents($file_path);
    $users = json_decode($existing_data, true);
} else {
    $users = [];
}

// Find the logged-in user's posts
$user_posts = [];
foreach ($users as $user) {
    if ($user['uname'] === $username) {
        $user_posts = $user['posts'];
        break;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Open Pages - Your Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Open Pages</a>
        </div>
    </nav>

    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>

    <h2>Your Posts</h2>
    <?php
foreach ($user_posts as $index => $post): ?>
    <div class="card" id="cardGrid">
        <h3><?php echo htmlspecialchars($post['title']); ?></h3>
        <p><?php echo nl2br(htmlspecialchars($post['text'])); ?></p>
        <p class="author">Posted on: <?php echo htmlspecialchars($post['timestamp']); ?></p>
        <form method="post" action="deletePost.php">
            <input type="hidden" name="post_index" value="<?php echo $index; ?>">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
<?php endforeach; ?>

    <br>
    <a href="postView.html.php" class="btn btn-warning">Post An Entry</a>
</body>
</html>
