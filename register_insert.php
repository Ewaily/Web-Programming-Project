<?php
$fn = $_POST["firstName"];
$nu = $_POST["Number"];
$em = $_POST["email"];
$pw = $_POST["pword"];
$gn = $_POST["gender"];
$ag = $_POST["age"];
$us = $_POST["usern"];
$sr = $_POST["sour"];


$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
mysqli_select_db($con,"mydb") or die (" can not select db ");

$statment1= "insert into  users (firstname,Number,email,password,gender,age,usern,sour) 
	values('$fn','$nu','$em','$pw','$gn','$ag','$us','$sr')";
	
$flag =mysqli_query($con,$statment1);
if ($flag)
{
	include("register_OK.php");
}
else
{
	die ("Error: ".mysqli_error($con));
}
?>