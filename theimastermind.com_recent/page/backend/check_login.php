<?

session_start();
 
	// mysql_connect("localhost","cp528315_theiDB","Theimastermind2016");
	// mysql_select_db("cp528315_theimastermind");
	require_once("../../db/connect.php");

	//******LOGIN MODULE CHECK ONLINE STATUS*******//
$serverName   = "localhost";
$userName     = "thei_db";
$userPassword     = "aF0Jprk5x";
$dbName   = "thei_db";

$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);

//*** Reject user not online
$intRejectTime = 20; // Minute
$sql = "UPDATE user SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
$query = mysqli_query($con,$sql);

//******END LOGIN MODULE CHECK ONLINE STATUS*******//


$strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['username'])."' 
	and password = '".md5(mysql_real_escape_string($_POST['password']))."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		
		header("location:login_wrong");
		exit();
	}
	else
	{
		if($objResult["LoginStatus"] == "1")
		{
			echo "Exits Login!";
			header("location:dashboard");
			exit();
		}
		else
		{
			//*** Update Status Login
			$sql = "UPDATE user SET LoginStatus = '1' , LastUpdate = NOW() WHERE user_id = '".$objResult["user_id"]."' ";
			$query = mysqli_query($con,$sql);

			//*** Session
			$_SESSION["user_id"] = $objResult["user_id"];
			session_write_close();

			//*** Go to Main page
			header("location:dashboard");
		}
			
	}
	mysqli_close($con);

	// $strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['username'])."' 
	// and password = '".md5('the-i-master-mind-admin-'+mysql_real_escape_string($_POST['password']))."'";
	// $objQuery = mysql_query($strSQL);
	// $objResult = mysql_fetch_array($objQuery);

	// if(!$objResult)
	// {
			
	// 		echo'<script>window.location="login_wrong.php";</script>';
 // end();
	// 		// echo "Username and Password Incorrect!";
	// 		// echo "Username $name and Password $name2  ";
	// }
	// else
	// {
	// 		$_SESSION["user_id"] = $objResult["user_id"];
	// 		$_SESSION["status"] = $objResult["status"];

	// 		session_write_close();
			
	// 		if($objResult["status"] == "admin")
	// 		{
	// 			echo'<script>window.location="dashboard.php";</script>';
 // end();
	// 		}
			
	// 		else
	// 		{
	// 			echo'<script>window.location="backend.php";</script>';
 // end();
	// 		}
	// }
	// mysql_close();
?>