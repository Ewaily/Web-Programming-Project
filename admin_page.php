<html>
<head>
<title>Staff Page</title>
</head>

<body>
	<h1>Staff Page</h1>
	<?php
	$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
	mysqli_select_db($con,"mydb") or die (" can not select db ");
	
	$statment1 = "SELECT * from users";
	$result =mysqli_query($con,$statment1);
	if ($result==false)
	{
		die ("Error: ".mysqli_error($con));
	}
	?>
	<table border="1">
		<tr style="font-weight:bold">
			<td>Full Name</td>
			<td>Mobile</td>
			<td>Email</td>
			<td>Gender</td>
			<td>Age</td>
		</tr>
	<?php
	while($row = mysqli_fetch_array($result)){
	$fn=$row ["firstname"];
	$nu=$row ["Number"];
	$em=$row ["email"];
	$gn=$row ["gender"];
	$age=$row ["age"];
	echo'<tr>
			<td>'.$fn.'</td>
			<td>'.$nu.'</td>
			<td>'.$em.'</td>
			<td>'.$gn.'</td>
			<td>'.$age.'</td>
		</tr>';
	}
	?>
	</table>
</body>
</html>