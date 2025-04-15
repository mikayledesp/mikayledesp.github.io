<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/technical.css">
</head>
<body>
<h1>Welcome! </h1>
<p>Please Login to continue</p>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="php/technical.php" method="post">
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