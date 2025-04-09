<?php
$uname = $_POST["uname"];
// echo $uname; 
// echo "<br>Your Password  is:";
$pword = $_POST["pword"]; 
// echo $pword;
echo "Welcome ".$uname."!";

$file = fopen("../output/users.txt", "w");
fwrite($file, "Username:".$uname);
fwrite($file, "Password:".$pword);
fclose($file);
?>