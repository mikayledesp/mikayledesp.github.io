<!DOCTYPE html>
<html>
<head>
<title>Where Am I ?</title>
<?php $path = realpath("../");
echo $path. "<br/>";
echo "base name function: "."<br/>";
echo basename($path) ."<br/>";
$weekNrString = substr($path, -1);
echo $weekNrString;

function checkDigit(){
    global $weekNrString, $weekNr;
    if ((var_dump(is_numeric($weekNrString))) === true){
       $weekNrString = (int) $weekNrString;
       $weekNr = $weekNrString;
       echo $weekNr;
    } 
}
?>

</head>
<body>
<h1>Where Am I ?</h1>
<h2>This page figures out its whereabouts.</h2>
<p>My week number is</p>
<?php checkDigit();?>
</body>
</html>