<html>
<head>
<title>Student Page</title>
</head>

<body>
	<h1>Users Page</h1>
	<?php
	$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
	mysqli_select_db($con,"mydb") or die (" can not select db ");
	
	$statment1 = "SELECT * from users where usern = '$un' ";
	$result =mysqli_query($con,$statment1);
	if ($result==false)
	{
		die ("Error: ".mysqli_error($con));
	}
	$row = mysqli_fetch_array($result);
	$fn=$row ["firstname"];
	$nu=$row ["Number"];
	$em=$row ["email"];
	$gn=$row ["gender"];
	$age=$row ["age"];
	$us =$row["usern"];
	?>

	<table border="1" width="500">
	<tr>
		<td>Full Name</td>
		<td align="center"><?php echo $fn ?></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td align="center"><?php echo $gn ?></td>
	</tr>
	<tr>
		<td>Username</td>
		<td align="center"><?php echo $us ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td align="center"><?php echo $em ?></td>
	</tr>
	<tr>
		<td>Age</td>
		<td align="center"><?php echo $age ?></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td align="center"><?php echo $nu ?></td>
	</tr>
	</table>
</body>
</html>