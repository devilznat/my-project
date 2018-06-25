<?
session_start();
require('../../db/connect.php');

if(!isset($_SESSION['user_id']))
	{
		header("location:backend.php");
		exit();
	}


//*** Update Last Stay in Login System
	$sql = "UPDATE user SET LastUpdate = NOW() WHERE user_id = '".$_SESSION["user_id"]."' ";
	$query = mysqli_query($con,$sql);

	//*** Get User Login
	$strSQL = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

$provinceid = $_POST["id"];

if (!empty($_POST["id"])) {
	
	$query = "SELECT * FROM amphur WHERE province_id = '$provinceid' ";
	$strSQL = $query;
	$result = mysql_query($strSQL);

	while($rs = mysql_fetch_array($result))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
			{
				$i++;

					?>

						<option value="<?php  echo $rs[amphur_id]; ?>"> <?  echo $rs[amphur_name_eng]; ?> </option> 

					<?

			}

}

else {
	

	?>

			<option value="dsfsd"> <? echo $_POST["provinceid"]; ?> </option> 
			<option value="dsfsd"> <? echo $_POST["id"]; ?> </option> 
			<option value="dsfsd"> dfsfsdfsd </option> 
			<option value="dsfsd"> dfsfsdfsd </option> 

	<?


}


?>