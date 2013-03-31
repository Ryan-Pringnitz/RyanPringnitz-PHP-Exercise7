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
*This has variables with information defined such as the host address, username and password. Followed by the mysql database. A series of if statements to establish a mysql connection or die and display the $conn_error statement
***************************************************************\
*/

$conn_error = 'Could not connect.';  //a string output for the variable $conn_error

$mysql_host = 'localhost'; //defining the localhost address with the variable $mysql_host
$mysql_user = 'root'; //defining the localhost password with the variable $mysql_user
$mysql_pass = ''; //defining the localhost password (there isn't one) with the variable #mysql_pass

$mysql_db = 'vehiclefleet'; //this defines the actual database we are connecting to in MySQL
if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_db)) { //series of if statements to establish a connection to the database defined
die ($conn_error); //if there is a problem it will die and display the literal string found in $conn_error

} 


?>
