<html>
<head>
<style>

.container{
	background-color:#80ffbf;
	padding: 30px;
	width:cal(100%-6px);
	height:auto;
	margin:auto;
}
</style>
</head>
<body>

<hr>
<div class="container">
<?php

include "../includes/database.php";

	$name=mysqli_real_escape_string($con,$_POST['fullname']);
	$add=mysqli_real_escape_string($con,$_POST['address']);
	$number=mysqli_real_escape_string($con,$_POST['contact']);
	$emailadd=mysqli_real_escape_string($con,$_POST['email']);
	$user=mysqli_real_escape_string($con,$_POST['username']);
	$pass=mysqli_real_escape_string($con,$_POST['password']);

	$sql="INSERT INTO registration (fullname,address,contact,email,
	username,password)VALUES('$name','$add','$number','$emailadd',
	'$user','$pass')";

		if(mysqli_query($con,$sql))
		{
			echo "<p style=\"font-size:20px;text-align:center;\"> Contact Registered Successfully!</p>";
		}
		else
		{
			echo "ERROR: Could not be able to execute $sql. ".mysqli_error($link);
		}
		mysqli_close($con);
?>
</div>
<hr>
<center>
<button onclick= window.location.href='register.php'>Register Another</button>
</body>
</html>
