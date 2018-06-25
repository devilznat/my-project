<?php 

if(empty($_FILES['file']))
{
	exit();	
}
$errorImgFile = "../../assets/js/plugins/summernoteimg/img/img_upload_error.jpg";

$temp = explode(".", $_FILES["file"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$destinationFilePath = '../../uploadfile/article/'.'article'.$newfilename;

if(!move_uploaded_file($_FILES["file"]["tmp_name"], $destinationFilePath )){
	echo $errorImgFile;
}
else{
	echo $destinationFilePath;
}

?>