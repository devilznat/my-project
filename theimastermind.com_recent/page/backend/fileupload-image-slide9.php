<?php
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
	

require('Uploader.php');

// Directory where we're storing uploaded images
// Remember to set correct permissions or it won't work
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$rando = generateRandomString(24);
$namefile  ="slidehomepage".$rando.".";


$upload_dir = '../../uploadfile/slide/homepage/';
$Upload = new FileUpload('slidehomepage');
$ext = $Upload->getExtension(); // Get the extension of the uploaded file
$Upload->newFileName = $namefile.$ext;
$namefiledb = $namefile.$ext;
$result = $Upload->handleUpload($upload_dir, $valid_extensions);


if (!$result) {
  exit(json_encode(array('success' => false, 'msg' => $uploader->getErrorMsg())));  
}

echo json_encode(array('success' => true));


// updata database
$sql ="UPDATE  `thei_db`.`slide_homepage` SET  `value_custom4` =  '".$namefiledb."' WHERE  `slide_homepage`.`shid` =9;";
$upQuery = mysql_query($sql);

$sql2 ="UPDATE  `thei_db`.`slide_homepage` SET  `value_custom4` =  '".$namefiledb."' WHERE  `slide_homepage`.`shid` =10;";
$upQuery = mysql_query($sql2);
