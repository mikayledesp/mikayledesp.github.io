<?php
$uname = $_POST["uname"];
// echo $uname; 
// echo "<br>Your Password  is:";
$pword = $_POST["pword"]; 
// echo $pword;
echo "Welcome ".$uname."!";

$file = fopen("../lab2Output/users.txt", "a");
fwrite($file,)
fwrite($file, "Username:".$uname."\n");
fwrite($file, "Password:".$pword."\n");
fclose($file);
function numOfUsers(){
// function to count number of users 
// open file to read 
// 

}
?>