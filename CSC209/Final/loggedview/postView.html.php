<!-- This view will mostly consist of styled forms that take in user input and dynamnically load in other cards into the container -->
<!-- <session_start();
 $_POST['uname'] = $username; 
?> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/postStyles.css">
    <link href="../bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- nav bar from bootstrap -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Open Pages</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mainPage.html.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../darkmode/mainPageDark.html.php">Dark Mode</a>
        </li>
        <li class="nav-item">
            <form method="post" action="../php/logout.html.php">
  <button type="submit" class="btn btn-warning" id="btn-darkmode"style="display: block;"> Log out </button>
</form>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- start of page -->
 <h1>Post Your Entry</h1>
 <div class="post-container">
<form  id="entryForm" action="../php/savePost.php" method="post">
    <input type="text" id="title" name="title" placeholder="Post Title" required />
    <input type="text" id="text" name="text" placeholder="Write something..." required />

    <input type="hidden" id="uname" name="uname" value="uname"/>
    <button type="submit"  class="btn btn-warning" style="display: block;">Post</button>
</form>
</div>
  <script src="../js/cardGen.js"></script>
  <script>
    document.getElementById("uname").setAttribute("value", window.localStorage.getItem("uname"));
    console.log(window.localStorage.getItem("uname"));
    document.getElementById("entryForm").addEventListener("submit", formSubmit);
  </script>
  <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
