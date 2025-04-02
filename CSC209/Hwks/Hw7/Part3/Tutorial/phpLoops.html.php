<html>
<body>
<h2>While Loops to print out all numbers till 5<h2>
<?php  
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
?>  
<h2> For Loops to print out numbers until 5<h2>
<?php  
for ($x = 1; $x <= 5; $x++) {
  echo "The number is: $x <br>";
}
?>  
<h2> For each loop<h2>
<p> Loop goes over color array and prints out each one<p> 
<?php  
$colors = array("red", "green", "blue", "yellow"); 
// uses for each and x as variable replaced by colors within the loop 
foreach ($colors as $x) {
  echo "$x <br>";
}
?>  

</body>
</html>