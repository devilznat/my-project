<?php
session_start();
require('../../db/connect.php');

require('Uploader.php');

$idresume = $_GET[idresume];
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


$namefile  ="resume".$idresume.".";


$upload_dir = '../../uploadfile/resume/upload_resume';
$Upload = new FileUpload('uploadresumenojob');
$ext = $Upload->getExtension(); // Get the extension of the uploaded file
$Upload->newFileName = $namefile.$ext;
$namefiledb = $namefile.$ext;
$result = $Upload->handleUpload($upload_dir, $valid_extensions);


if (!$result) {
  exit(json_encode(array('success' => false, 'msg' => $uploader->getErrorMsg())));  
}

echo json_encode(array('success' => true));

$_SESSION["filenameresume"] = $namefiledb;

session_write_close();
