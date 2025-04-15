<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/technical.css">
</head>
<body>
<h1>Welcome To Mikayle's very impresive Web Application! </h1>
<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
<br>
<p style="color: green;">Please Login to continue</p>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<br> 
<p>If Admin, Please click the button bellow</p>
<a href="adminCreative.html.php">Administrative View</a>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="php/creative.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/iconLogin.png" alt="Avatar" class="avatar">
    </div>

    
  <!-- <label for="uname"> Enter User Name:</label><br>
  <input type="text" id="uname" name="uname" value="Mikayle0506"><br><br>
  <label for="pword">Enter Password:</label><br>
  <input type="text" id="pword" name="pword" ><br>
  <input type="submit" value="Submit">
    </form>  -->

    <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="pword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pword" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script src="js/technical.js"></script>
</body>
</html>