<?php
include 'connect.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql_statement = mysql_query("SELECT username, password FROM users");
	$result = mysql_num_rows($sql_statement);

	if($result  == 0){
		echo "Username and password do not exist! Register!";
	} else {
		header('Location: http://localhost/miriam_project/home_page.html', true, 301);
	}
}

if (isset($_POST['register'])){
	header('Location: http://localhost/miriam_project/register.html', true, 301); 
}

if (isset($_POST['registration'])){
	$fullname = $_POST['fullname'];
	$new_username = $_POST['username'];
	$new_password = $_POST['password'];
	$repeated_pass = $_POST['repeat_password'];

	if ($new_password != $repeated){
		echo 'Password do not match';
	}
	$sql = "INSERT INTO users 
			VALUES 
			('$fullname', '$username', '$password')";
} 



?>