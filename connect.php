<?php
session_start();
$servername = "localhost";
$name = "root";
$password = "";
$database = 'lex_scripta';


//connect to mysql
//$connection = mysql_connect($servername, $name, $password) or die(mysqli_error());

$connection = mysqli_connect($servername, $name, $password, "lex_scripta")or die(mysqli_error());


//select the required database
$sql = mysqli_select_db($connection, $database) or die("Could not select database");

?>