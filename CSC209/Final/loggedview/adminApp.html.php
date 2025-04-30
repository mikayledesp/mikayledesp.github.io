<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page - Open Pages</title>
  <link href="../bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/postStyles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Open Pages</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../loginPage.html.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mainPageDark.html.php">Dark Mode</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 >Admin Only View</h1>

<center>
<form method="post">
  <input type="submit" name="btn-data" value="Load User Data" class="btn" id="btn-darkmode">
</form>
</center>

<?php
// deletes user
if (isset($_POST['delete_user'])) {
    $userToDelete = $_POST['delete_user'];
    $userFolder = "../outputFinal/" . $userToDelete;

    if (is_dir($userFolder)) {
        deleteFolder($userFolder);
        echo "<center><p style='color:red; margin-top:20px;'>Deleted user: " . htmlspecialchars($userToDelete) . "</p></center>";
    } else {
        echo "<center><p style='color:red; margin-top:20px;'>User folder does not exist.</p></center>";
    }
}

// loads user data 
if (isset($_POST['btn-data'])) {
    countUsers();
}

// 
function countUsers() {
    $base_path = "../outputFinal/";
    $usernames = [];

    if (is_dir($base_path)) {
        $folders = scandir($base_path);

        foreach ($folders as $folder) {
            if ($folder !== "." && $folder !== "..") {
                $usernames[] = $folder;
            }
        }

        $count = count($usernames);

        echo "<br><center><h3>Total Users:</h3> " . $count . "</center><br>";

        if ($count > 0) {
            echo "<center><div class='container'>";
            foreach ($usernames as $uname) {
                echo '<div>';
                echo '<strong>' . htmlspecialchars($uname) . '</strong>';
                echo '
                  <form method="post" style="display:inline-block; margin-left:10px;" onsubmit="return confirmDelete(\'' . htmlspecialchars($uname) . '\')">
                    <input type="hidden" name="delete_user" value="' . htmlspecialchars($uname) . '">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                ';
                echo '</div>';
            }
            echo "</div></center>";
        }
    } else {
        echo "<center><p>ERROR: Directory does not exist.</p></center>";
    }
}

// deletes folder
function deleteFolder($folder) {
    $files = array_diff(scandir($folder), array('.', '..'));

    foreach ($files as $file) {
        $path = "$folder/$file";
        if (is_dir($path)) {
            deleteFolder($path);
        } else {
            unlink($path);
        }
    }

    rmdir($folder);
}
?>

<!-- Tiny JavaScript popup to confirm deletion -->
<script>
function confirmDelete(username) {
  return confirm('Are you sure you want to permanently delete user "' + username + '"?');
}
</script>

<script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
