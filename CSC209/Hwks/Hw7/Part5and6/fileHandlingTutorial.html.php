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
 // remember to close the file 
fclose($myfile);
?>

<h2> Using fread: <h2>
<?php
$myfile = fopen("testfile.txt", "r"); 
if ($myfile) {
    echo fread($myfile, filesize("testfile.txt"));
    // remember to close the file 
    fclose($myfile); 
}
?>

<h2> Checking if file exists, there should be a 1 is yes. <h2>
<?php
echo file_exists("testfile.txt");
?>
<h2>PHP glob function <h2>
<?php
print_r(glob("*.txt"));
?>
</body>
</html>