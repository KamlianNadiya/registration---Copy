<?php
include_once"../includes/database.php";
$id=$_REQUEST['id'];
$getcontact = mysqli_query($con, "SELECT * FROM registration WHERE id=$id");

while($row=mysqli_fetch_array($getcontact))
{
	$name=$row['fullname'];
	$add=$row['address'];
	$number=$row['contact'];
	$email=$row['email'];
	$username=$row['username'];
	$password=$row['password'];
}
?>

<html>
<head>
	<title>CRUD || Edit Contact </title>
	<style>
	#msg-container {
		display: table;
		width: 100%;
		height: 300px;

	}
	#wrapper {
		display: table-cell;
		vertical-align: middle;
		text-align: center;
	}

		td:nth-child(1){
			padding-left:10px;
			padding-right:10px;
		}
	</style>

</head>

<body>
<center>

<body>

<?php
if (isset($_POST['save']))
{
	$id=$_POST['id'];
	$name=$_POST['fullname'];
	$add=$_POST['address'];
	$number=$_POST['contact'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];

 $query="UPDATE registration SET fullname='$name',address='$add',contact='$number',email='$email',username='$username',password='$password' WHERE id='$id'";

	if ($con->query($query))
	{
echo '<script>alert("Changes Successfully Saved!")</script>';
echo '<script>window.location.replace("view.php")</script>';

	}else{
		echo "an error occured".$con->error;
	}
}
?>

<div id="msg-container">
			<div id="wrapper">

				<center>
 <form action="" method="POST">
	 	<h4>Edit Contact</h4>
  <table border="6" style="	font-family: arial; border-color:#03d88f;">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
   <tr>
    <td>Fullname:</td>
    <td><input type="text" name="fullname" value="<?php echo $name; ?>"></td>
   </tr>
   <tr>
    <td>Address :</td>
    <td><input type="text" name="address" value="<?php echo $add; ?>"></td>
   </tr>
   <tr>
    <td>Contact no.:</td>
    <td><input type="text" name="contact" maxlength="11" value="<?php echo $number; ?>"></td>
    </td>
   </tr>
   <tr>
    <td>Email Address :</td>
    <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
   </tr>
  <tr>
    <td>Username :</td>
    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" value="<?php echo $password; ?>"></td>
   </tr>
   <tr>
   <td></td>
    <td><input type="submit" name="save" value="save"></td>
   </tr>
  </table>
 </form>
</div>
</div>

</body>
</html>
