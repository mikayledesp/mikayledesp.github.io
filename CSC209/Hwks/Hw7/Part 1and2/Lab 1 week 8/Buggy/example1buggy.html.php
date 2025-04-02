<!--  has to start with this in order to store the data used in the html below  -->
<?php
// $WEEK = "<h1>Week NRWEEK</h1>";
// Note : php variables start with the dollar sign 
//
$LISTDATES = array("Feb 1","Feb 8","Feb 15","Feb 21","March 1","March 8","March 15","March 21","April 1","April 8","April 15","April 21");

// $DATE = "<h2>DATE</h2>";

$LISTTOPICS= array("Installation","Html","Css","Javascript 1","","","","","","","","","");

// $TOPIC ="<h3>TOPIC</h3";

$LISTDESCRIPTIONS=array("We install software","We make our first Html","We style pages with Css","Get started on Javascript ","","","","","","","","","");
//$NRWEEKS = 6;
$NRWEEKS = count($LISTDATES);
// $TOPIC ="<h3>DESCRIPTION</h3";

?>

<html>
<head>

</head>
<body>
	<!-- Notes -->
<!-- you can put the php within an html tag like so -->
 <!-- instead of string concatenation being a + like JS, you use a dot (.) -->
  <!-- echo function we print something on the screen  -->
<h1><?php echo "NRWEEKS=".$NRWEEKS."<br>"; ?></h1>
<!-- php for loop goes in between the html code  -->
<?php

for ( $i=1; $i <= $NRWEEKS; $i++){
	echo("<h1>Week $i<h1>");
	//use concatenation 
	echo("<h2>Date:".$LISTDATES[$i-1]."</h2>");
	echo("<h2>Topic:".$LISTTOPICS[$i-1]."</h2>");
	echo("<h2>Description: ".$LISTDESCRIPTIONS[$i-1]."</h2>");
	}
?>
	
</body>
</html>