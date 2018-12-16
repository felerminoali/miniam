<?php
session_start();

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

//$this->_host = $url["host"];
//$this->_user = $url["user"];
//$this->_password = $url["pass"];
//$this->_name = substr($url["path"], 1);


$servername = $url["host"];
$name = $url["user"];
$password = $url["pass"];
$database =  substr($url["path"], 1);


//connect to mysql
//$connection = mysql_connect($servername, $name, $password) or die(mysqli_error());

$connection = mysqli_connect($servername, $name, $password, "lex_scripta")or die(mysqli_error());


//select the required database
$sql = mysqli_select_db($connection, $database) or die("Could not select database");

?>