<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexStyle.css">
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
          <a class="nav-link" href="#">Post</a>
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
    <h1>Where journaling meets community</h1>
    <div class="card">
  <div class="card-body">
    <h2 class="diary-title">Diary Entry # 1</h2>
    <p class="entry-text"> Hi, this is my first diary entry.</p>
    <p class="author">Posted By: @Mikiams<p>
  </div>
  <!-- In order to make this dynamically we would need to load in title, text and author dynamically  -->
</div>
<button type="button" class="btn btn-warning" id="btn-darkmode">Dark Mode</button>
<button type="button" class="btn btn-warning" id="btn-view-past">View Past Entries</button>

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







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>