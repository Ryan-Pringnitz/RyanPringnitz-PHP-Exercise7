<link rel="stylesheet" href="rypri6986-exercise7.css" type="text/css"> <!-- this is to include my CSS sheet --!>
<?php
/*
/**************************************************************
*Programmer: Ryan Pringnitz
*Class ID  : rypri6986
*Exercise 7 
*CIS 2800: Internet Programming 
*Spring 2013
*Due date: 3.31.13
*Date completed: 3.30.13
***************************************************************\
*Program Explanation 
*
*This is where most of the magic happens. With the connect.inc.php file required we have established our database connection already. But in this file we actually make the 
*queries and start to display the content of the vehicles table using SQL, MySQL, PHP, and CSS
***************************************************************\
*/

require 'rypri6986-exercise7connect.inc.php';  //this requires this file to be ran and included or the page will not load


$query = "SELECT `make`, `model`, `license`, `model_year`, `mileage` FROM `vehicles` ORDER BY `model_year`"; //writing some SQL in a variable called $query. Selecting a few columns from the vehicles table and ordering them by 
//model year


if ($query_run = mysql_query($query)) {

while ($query_row = mysql_fetch_assoc($query_run)) { //this will return an associative array with the contents of the column in the array
	$license = $query_row['license'];  //I have to query each column 
	$model_year = $query_row['model_year']; //Look at me query the next column
	$mileage = $query_row['mileage']; //$query_row is really mysql_fetch_assoc
	$make = $query_row['make']; //another query on a column
	$model = $query_row['model'];


	print("<h1>" . $make. '  ' .$model  . ' ' .  $license . ' ' . $mileage . ' ' . $model_year . '<br>' . "</h1>"); //my print statement finally which includes concactinations to join all the contents of the associative array
	//variables I have assigned above. A requirement of the assignment was to modify the output with CSS so I finally use an h1 HTML tag. In my CSS file I have the text color set using hexadecimal colors
	

}
} else {
echo mysql_error();  //if there is a problem...we will have mysql_error return the error
}

?>
