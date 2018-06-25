<?php
session_start();
require('../../db/connect.php');

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
$namefile  ="image".$rando.".";


$upload_dir = '../../uploadfile/resume/';
$Upload = new FileUpload('imageresume');
$ext = $Upload->getExtension(); // Get the extension of the uploaded file
$Upload->newFileName = $namefile.$ext;
$namefiledb = $namefile.$ext;
$result = $Upload->handleUpload($upload_dir, $valid_extensions);


if (!$result) {
  exit(json_encode(array('success' => false, 'msg' => $uploader->getErrorMsg())));  
}

echo json_encode(array('success' => true));

$_SESSION["imageresume"] = $namefiledb;

session_write_close();

// updata database
// $sql ="UPDATE  `theimastermind`.`jobs_value` SET  `value_custom` =  '".$namefiledb."' WHERE  `jobs_value`.`job_id` ='$idjob';";
// $upQuery = mysql_query($sql);
