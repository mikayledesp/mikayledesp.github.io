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
    } 
    echo $weekNr;
}
?>