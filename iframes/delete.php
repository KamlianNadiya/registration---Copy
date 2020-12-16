<?php
include "../includes/database.php";
$id=$_REQUEST['id'];

mysqli_query($con,"DELETE FROM registration WHERE id=$id");
header("location:view.php");
?>