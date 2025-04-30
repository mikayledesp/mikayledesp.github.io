<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <a class="nav-link active" aria-current="page" href="loginPage.html.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mainPageDark.html.php">Dark Mode</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-warning"
          onclick="document.getElementById('id01').style.display='block'"
          >Login</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- LOGIN MODAL -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="php/saveUsers.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/iconLogin.png" alt="Avatar" class="avatar">
    </div>
    <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="pword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pword" required>
        
      <button type="submit" id="btn-modal">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<h1>Admin Only View</h1>
<center>
<form method="post">
<input type="submit" name="btn-data" value="Load User Data">
</form>
</center>
<?php
if (isset($_POST['btn-data'])) {
    countUsers();
}

function countUsers() {
    $base_path = "../outputFinal/";
    $usernames = [];

    if (is_dir($base_path)) {
        $folders = scandir($base_path);

        foreach ($folders as $folder) {
            // skip current and parent directory
            if ($folder !== "." && $folder !== "..") {
                $usernames[] = $folder;
            } }

        $count = count($usernames);

        echo "<br><center><h3>Total Users:</h3> " . $count . "</center><br>";

        if ($count > 0) {
            echo "<center><p>Usernames:</p>";
            foreach ($usernames as $uname) {
                echo htmlspecialchars($uname) . "<center><br>";
            }
        }

    } else {
        echo "ERROR: Directory does not exist.";
    }
}
?>
</body>
</html>