<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Pages</title>
    <link href="../bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
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
              <a class="nav-link" href="darkmode/mainPageDark.html.php">Dark Mode</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="darkmode/mainPageDark.html.php">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../resourceView.html">Resources</a>
            </li>
            <li class="nav-item">
            <form method="post" action="../php/logout.html.php">
  <button type="submit" class="btn btn-warning" id="btn-"style="display: block;"> Log out </button>
</form>
        </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Hero -->
    <br>
    <h1>Welcome Back, Your Journal Awaits!</h1>
  <div class="btn-container">
    <a href="postView.html.php" class="btn btn-warning" id="btn-view-past" role="button">Post An Entry</a>
  </div>
  <!-- loading in the diary entries -->
  <div id="cardGrid"></div>
<!-- Had to load in javascript file early since i called the function from it next -->
<script src="../js/cardGen.js"></script>
<script>
  window.addEventListener("DOMContentLoaded",renderEntries);
  console.log(window.localStorage.getItem("uname"));
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p id="admin-text">Have an Admin account? Click below<p>
<a id="admin-text" href="../adminApp.html.php">Administrative view</a>
  <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>