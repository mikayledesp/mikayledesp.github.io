<!--used session_start taken from : https://www.php.net/manual/en/function.session-start.php -->
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
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
              <a class="nav-link active" aria-current="page" href="loggedInmainPage.html.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mainPageDark.html.php">Dark Mode</a>
            </li>
            <li class="nav-item">
              <span class="nav-link"> <strong>Logged In!</strong></span>
            </li>
            <li class="nav-item">
              <a href="../php/logout.php" role="button" class="btn btn-warning" id="btn-log-out">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h2>Your Past Entries:</h2>
    <div id="cardGrid">
      <?php
      // Read the posts from the file
      $postsFile = 'posts.json';  // File containing posts
      if (file_exists($postsFile)) {
          $posts = json_decode(file_get_contents($postsFile), true);
          // Filter posts to only show the logged-in user's posts
          foreach ($posts as $post) {
              if ($post['author'] == $_SESSION['uname']) {
                  echo "<div class='post'>";
                  echo "<h3>" . htmlspecialchars($post['title']) . "</h3>";
                  echo "<p>" . htmlspecialchars($post['text']) . "</p>";
                  echo "<small>Posted on: " . $post['date'] . "</small>";
                  echo "</div>";
              }
          }
      } else {
          echo "<p>No posts found.</p>";
      }
      ?>
    </div>
  </body>
</html>
