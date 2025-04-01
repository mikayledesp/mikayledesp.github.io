<html>
<head>

</head>
<body>
<h1> Creating files using fopen <h1>

<?php
$myfile = fopen("testfile.txt", "w")

?>
<h2> Using fwrite <h2>
<?php
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<h2> Using fread <h2>
<?php
$myfile = fopen("testfile.txt", "r");
fread($myfile,filesize("testfile.txt"));
echo fgets($myfile);
fclose($myfile);
?>

</body>
</html>