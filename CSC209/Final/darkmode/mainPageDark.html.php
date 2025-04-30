<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Pages</title>
    <link href="../bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mainDark.css">
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
              <a class="nav-link " aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../loggedview/mainPage.html.php">Light Mode</a>
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
    <h1> Hi <strong id="welcomeUser"></strong> 👋 </h1>
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    if (localStorage.getItem('uname')) {
      document.getElementById('welcomeUser').textContent = localStorage.getItem('uname');
    }
  });
</script>

    <h2>Your Journal Awaits!</h2>
  <div class="btn-container">
    <a href="postViewDark.html.php" class="btn btn-warning" id="btn-darkmode" role="button">Post An Entry</a>
    <a href="editEntries.html.php" class="btn btn-warning" id="btn-view-past" role="button">Manage Entries</a>
  </div>
  <!-- loading in the diary entries -->
  <div id="cardGrid"></div>
<script src="../js/cardGen.js"></script>
<script>
  window.addEventListener("DOMContentLoaded",renderEntries);
  // console.log(window.localStorage.getItem("uname"));
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>