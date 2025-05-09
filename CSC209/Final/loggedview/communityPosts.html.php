<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Community Posts</title>
  <link href="../bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/comminity.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Open Pages</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="mainPage.html.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mainPage.html.php">Journal Entries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../resourceView.html">Resources</a>
          </li>
          <li class="nav-item">
            <form method="post" action="../php/logout.html.php">
              <button type="submit" class="btn btn-warning">Log out</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <h1>Community Posts</h1>
    <div class="my-4">
      <h3>Share with Everyone ✍️</h3>

      <form id="communityForm" action="../php/postCommunity.php" method="post">
        <input type="text" id="titleInput" name="title" placeholder="Post Title" required class="form-control mb-2">
        <textarea id="textInput" name="text" placeholder="Write your thoughts..." required class="form-control mb-2"></textarea>
        <input type="hidden" name="uname" value="" id="unameInput">
        <button type="submit" class="btn btn-warning">Post</button>
      </form>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
          document.getElementById('unameInput').value = localStorage.getItem('uname');
        });
      </script>

    </div>

    <div id="cardGrid" class="row mt-4"></div>
  </div>

  <script src="../js/communityGen.js"></script>
  <script>
    window.addEventListener("DOMContentLoaded", () => {
      renderCommunityPosts();
    });
  </script>

  <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

