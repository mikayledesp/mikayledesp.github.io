<!--used session_start taken from : https://www.php.net/manual/en/function.session-start.php -->
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/postStyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="loggedInmainPage.html.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mainPageDark.html.php">Dark Mode</a>
        </li>
        <li class="nav-item">

        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- LOGIN MODAL FROM W3 SCHOOLS -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="php/savePosts.php" method="post">
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
<!-- start of page -->
 <h1>Post Your Entry</h1>
 <div class="post-container">
 <form id="entryForm" action="php/saveData.php" method="post">
    <input type="text" id="title" name="title" placeholder="Post Title" required />
    <input type="text" id="text" name="text" placeholder="Write something..." required />
    <!-- ideally i need to make a conditional so that if your not logged in this form cannot be filled  -->
    <button type="submit" name="btn-data">Post</button>
  </form>
</div>
  <script src="js/cardGen.js"></script>
  <script>
    document.getElementById("entryForm").addEventListener("submit", formSubmit);
  </script>
</body>
</html>