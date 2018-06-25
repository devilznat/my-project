<?php
session_start();
require('../../db/connect.php');

if(!isset($_SESSION['user_id']))
	{
		header("location:backend.php");
		exit();
	}
	
	// //*** Update Last Stay in Login System
	// $sql = "UPDATE user SET LastUpdate = NOW() WHERE user_id = '".$_SESSION["user_id"]."' ";
	// $query = mysqli_query($con,$sql);

	// //*** Get User Login
	// $strSQL = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
	// $objQuery = mysqli_query($con,$strSQL);
	// $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);


//*** Update Last Stay in Login System
	$sql = "UPDATE user SET LastUpdate = NOW() WHERE user_id = '".$_SESSION["user_id"]."' ";
	$query = mysqli_query($con,$sql);

	//*** Get User Login
	$strSQL = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);


switch ($type) {
	case 'testimomnials':
		
		$getid = $_GET['tdid'];

		$sql1 ="DELETE FROM `thei_db`.`testimonials_detail` WHERE `testimonials_detail`.`tdid` = '$getid';";
		$upQuery1 = mysql_query($sql1);
		$url = "/page/backend/testimonials";
		echo ("<script>location.href='$url'</script>");

		# code...
		break;
	

	case 'job':
		
		$getid = $_GET['jobid'];

		$sql1 ="DELETE FROM `thei_db`.`jobs_value` WHERE `jobs_value`.`job_id` = '$getid';";
		$upQuery1 = mysql_query($sql1);
		$url = "/page/backend/job-all";
		echo ("<script>location.href='$url'</script>");

		# code...
		break;


	case 'article':
		
		$getid = $_GET['articleid'];

		$sql1 ="DELETE FROM `thei_db`.`newsletter` WHERE `newsletter`.`article_id` = '$getid';";
		$upQuery1 = mysql_query($sql1);
		$url = "/page/backend/article-all";
		echo ("<script>location.href='$url'</script>");

		# code...
		break;

	case 'resume':
		
		$getid = $_GET['resumeid'];

		$sql1 ="DELETE FROM `thei_db`.`resumes` WHERE `resumes`.`resume_id` = '$getid';";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="DELETE FROM `thei_db`.`academic_qualifications` WHERE `academic_qualifications`.`resume_id` = '$getid';";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="DELETE FROM `thei_db`.`professional_experience` WHERE `professional_experience`.`resume_id` = '$getid';";
		$upQuery3 = mysql_query($sql3);

		$url = "/page/backend/resume";
		echo ("<script>location.href='$url'</script>");

		# code...
		break;


	default:
		# code...
		break;
}


