<!--used session_start taken from : https://www.php.net/manual/en/function.session-start.php -->
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../css/indexStyle.css">
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
              <a class="nav-link" href="../darkmode/mainPageDark.html.php">Dark Mode</a>
            </li>
            <li class="nav-item">
            <span class="nav-link">Logged in as <strong><?php echo htmlspecialchars($_SESSION['uname']); ?></strong></span>
          </li> 
            <li class="nav-item">
            <a href="../mainPage.html.php" role="button" class="btn btn-warning" id="btn-log-out">Log Out</a>
        </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Hero -->
    <br>
    <h1>Where journaling meets community</h1>
  <div class="btn-container">
    <a href="loggedInpostView.html.php" class="btn btn-warning" id="btn-darkmode" role="button">Post An Entry</a>
    <a href="pastEntries.html.php" role="button" class="btn btn-warning" id="btn-view-past">View Past Entries</a>
  </div>
  <!-- loading in the diary entries -->
  <div id="cardGrid"></div>
<!-- Had to load in javascript file early since i called the function from it next -->
<script src="../js/cardGen.js"></script>
<script>
  window.addEventListener("DOMContentLoaded",renderEntries);
</script>
<br>
<br>
<br>
<br>
<p id="admin-text">Have an Admin account? Click below<p>
<a id="admin-text" href="../adminApp.html.php">Administrative view</a>
<p></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>