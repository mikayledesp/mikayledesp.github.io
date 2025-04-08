<html>
<head></head>
<body>

<h1>PHP Tutorial </h1>

<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; // The current element is Peter
echo next($people) . "<br>"; // The next element of Peter is Joe
echo current($people) . "<br>"; // Now the current element is Joe
echo prev($people) . "<br>"; // The previous element of Joe is Peter
echo end($people) . "<br>"; // The last element is Cleveland
echo prev($people) . "<br>"; // The previous element of Cleveland is Glenn
echo current($people) . "<br>"; // Now the current element is Glenn
echo reset($people) . "<br>"; // Moves the internal pointer to the first element of the array, which is Peter
echo next($people) . "<br>"; // The next element of Peter is Joe
// dont use foreach 
print_r ($people); // Returns the key and value of the current element (now Joe), and moves the internal pointer forward
?>
</body>
</html>