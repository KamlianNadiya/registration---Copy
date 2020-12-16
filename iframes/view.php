<!DOCTYPE>
<html>
<head>
<style>

table{
	width: calc(100% - 40px) ;
	border:3.4px solid;
	border-collapse: collapse;
  margin:auto;
}

.fx, th{
	border:2.4px solid;
	padding:4px;
}


th{
	color:#003c27;
	border:3.4px solid;
	background-color: #68a590;
}

td{
	font-size: 13px;
}

tr:nth-child(even) {background-color: #c4e5da;}
tr:nth-child(odd) {background-color: #d6fff1;}

</style>
<body style="font-family: Arial;">

<h3 style="margin-left: 19px; margin-top:30px;margin-bottom:0;padding-bottom:8px;"> REGISTERED ACCOUNTS</h2>

  <table>
    <tr>
		<th>Full Name</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th></th>
	</tr>

  <?php

include_once "../includes/database.php" ;

$sql = "SELECT id,fullname,address,contact,email,username,password FROM registration";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {

		echo "<tr class=\"fx\">	<td>".$row["fullname"]." </td>
					<td class=\"fx\">".$row["address"]." </td>
					<td class=\"fx\">".$row["contact"]." </td>
					<td class=\"fx\">".$row["email"]." </td>
					<td class=\"fx\">".$row["username"]." </td>
					<td class=\"fx\">".$row["password"]."</td>
					<td class=\"fx\">
						<a href=\"edit.php?id=$row[id]\"> Edit</a>
						<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete </a>
					</td>";
		}

} else {
	echo "<tr style=\"border:0px;\"><td>0 results</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
	}

	mysqli_close($con);
?>

</table>


</body>

</head>
</html>
