<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/technicalStyle.css">
</head>
<body>
<h1>Welcome To Mika's Job Board! </h1>
<p>Please Login to see a 1,000+ jobs that get updated daily!</p>
<div id="img-div">
<img src="https://images.unsplash.com/photo-1681505531034-8d67054e07f6?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500" height="300">
</div>
<br>
<p>Would you want to move to a new city and go on thr journey of your dreams? If yes, you've found the right place! Through this form you can log in and have personalized information for the next time you choose to start up the job process again!</p>
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