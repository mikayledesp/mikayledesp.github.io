<!DOCTYPE html>
<html>
<body>

<?php 
$path = realpath("../");
echo "<h1>".basename($path) ."</h1>"."<br/>";

?>


<!-- Notes: Figure out what action means, prop adds to php but idk -->
 <!-- Answer : The action attribute specifies where to send the form-data when a form is submitted. -->
<form action="lab2PHP/saveUsers.php" method="POST">
  <label for="uname"> Enter User Name:</label><br>
  <input type="text" id="uname" name="uname" value="Mikayle0506"><br><br>
  <label for="pword">Enter Password:</label><br>
  <input type="text" id="pword" name="pword" ><br>
  <input type="submit" value="Submit">
</form> 
<br>
<a href="adminApp.html.php">Administrative View</a>
</body>
</html>

