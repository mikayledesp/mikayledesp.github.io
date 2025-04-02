<html>
<head></head>
<body>

<h1>PHP Array Function Tutorials  </h1>
<h2>Count Function</h2>
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>

<h2> Current Function </h2>
<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
?>
<h2>Update Function</h2>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>
<h3>Upated Version </h3>
<?php 
$cars[1] = "Ford";
var_dump($cars);
?>  

</body>
</html>