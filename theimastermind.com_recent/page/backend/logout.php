<?php
	session_start();
	session_destroy();
	require_once("../../db/connect.php");

	//*** Update Status
	$sql = "UPDATE user SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00' WHERE user_id = '".$_SESSION["user_id"]."' ";
	$query = mysqli_query($con,$sql);

	session_destroy();
	header("location:backend");
?>