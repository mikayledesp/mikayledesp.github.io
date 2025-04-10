<?php
$uname = $_POST["uname"];
// echo $uname; 
// echo "<br>Your Password  is:";
$pword = $_POST["pword"]; 
// echo $pword;
echo "Welcome ".$uname."!";

$file = fopen("../lab2Output/users.txt", "w");
fwrite($file,"[".json_encode($_POST)."]");
fclose($file);


// if file exists read the contents using file_get_contents that will give u sth string of the file, then use json decode, use array push  
function numOfUsers(){
// function to count number of users 
// open file to read 
// 

}
?>