<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['uname'])) {
    // Redirect to login page if not logged in
    header("Location: ../mainPage.html.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Pages</title>
    <link rel="stylesheet" href="../css/indexStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="darkmode/mainPageDark.html.php">Dark Mode</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pastEntries.html.php">Past Entries</a>
            </li>
            <form action="../php/logout.php" method="post">
              <button id="btn-darkmode" type="submit">Logout</button>
            </form>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <h1>Where journaling meets community</h1>
    <div class="btn-container">
      <a href="../postView.html.php" class="btn btn-warning" id="btn-darkmode" role="button">Post An Entry</a>
      <a href="resourceView.html" class="btn btn-warning" id="btn-view-past" role="button">See Resources</a>
    </div>
    <!-- loading in the diary entries -->
    <div id="cardGrid"></div>
    <script src="../js/cardGen.js"></script>
    <script>
      window.addEventListener("DOMContentLoaded", renderEntries);
    </script>
    <br><br><br><br>
    <p id="admin-text">Have an Admin account? Click below<p>
    <a id="admin-text" href="adminApp.html.php">Administrative view</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
