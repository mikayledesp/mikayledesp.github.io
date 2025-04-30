<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Pages</title>
    <link href="bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/indexStyle.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand " id="hero-text" href="#">Open Pages</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="darkmode/loginPageDark.html.php">Dark Mode</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loggedview/communityTab.html.php">Community</a>
            </li>
            <li class="nav-item">
          <button type="button" class="btn btn-warning"
          onclick="document.getElementById('id01').style.display='block'"
          >Login to Post</button>
        </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Hero -->
    <br>
    <br>
    <h1>Where Journaling Meets Community</h1>
    <br>
    <br>
  <div class="btn-container">
    <a href="resourceView.html" class="btn btn-warning" id="btn-darkmode" role="button">View Resources</a>
  </div>


<!-- LOGIN MODAL FROM W3 SCHOOLS -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="php/saveUser.html.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/iconLogin.png" alt="Avatar" class="avatar">
    </div>
    <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="pword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pword" required>
        
      <button type="submit" id="btn-modal" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<script>

</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p id="admin-text">Have an Admin account? Click below<p>
<a id="admin-text" href="adminLogin.html.php">Administrative view</a>
<br>
<br>
<p id="admin-text">Website by Mikayle Despaigne for CSC 209 </p>
<script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>