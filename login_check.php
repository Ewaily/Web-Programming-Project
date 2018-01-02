<?php
$un=$_POST["Rname"];
$pw=$_POST["password"];

if( $un == "admin" && $pw == "admin" ) {
	include("admin_page.php");
}

else {
	$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
	mysqli_select_db($con,"mydb") or die (" can not select db ");
	
	$statment1 = "SELECT * from users where usern = '$un' ";
	$result =mysqli_query($con,$statment1);
	if ($result==false)
	{
		die ("Error: ".mysqli_error($con));
	}
	$row = mysqli_fetch_array($result);
	$answer=$row ["password"];

	if( $pw == $answer ) {
		include("users_page.php");
	}
	else {
		header('Location: login_failed.php');
	}
}
?>