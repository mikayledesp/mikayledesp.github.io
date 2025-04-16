<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/technical.css">
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Recipes</a></li>
  <li><a href="#about">Community Posts</a></li>
  <li><a href="#contact">My Profile</a></li>
</ul>

<h1>Welcome To Mikayle's CookBook </h1>
<p>This website details a conclusive cookbook where users can log in and see exclusive recipes. Users can submit their recipes for others to cook and rate. Users can also engage in fun cookoff competitions as well! </p>
<br>
<center><img src="images/food.png" alt="Girl in a jacket" width="570" height="270"><center>
<p style="color: white;">Please Login to continue</p>
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