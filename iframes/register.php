<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
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
		</style>
</head>
<body>
<div id="msg-container">
			<div id="wrapper">
 <form action="success.php" method="POST">
 <center>
     	<h4>Registration</h4>
  <table border="6" style="font-family:arial;border-color:#03d88f;">
   <tr>
    <td>Fullname:</td>
    <td><input type="text" name="fullname" required></td>
   </tr>
   <tr>
    <td>Address :</td>
    <td><input type="text" name="address" required></td>
   </tr>
   <tr>
    <td>Contact no.:</td>
    <td><input type="text" name="contact" maxlength="11" required></td>
    </td>
   </tr>
   <tr>
    <td>Email Address :</td>
    <td><input type="email" name="email" required></td>
   </tr>
  <tr>
    <td>Username :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
   <td></td>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>
 </div>
 </div>
</body>
</html>
