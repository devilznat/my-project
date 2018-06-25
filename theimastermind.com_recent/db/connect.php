<?
	
	mysql_connect("localhost","thei_db","aF0Jprk5x");
	mysql_select_db("thei_db");

//******LOGIN MODULE CHECK ONLINE STATUS*******//
$serverName   = "localhost";
$userName     = "thei_db";
$userPassword     = "aF0Jprk5x";
$dbName   = "thei_db";

$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	//Set Defult timezone to Thailand
	ini_set("date.timezone", "Asia/Bangkok");
	
	
	//SET Defult Encoding
	mysql_query("SET NAMES UTF8");


//*** Reject user not online
$intRejectTime = 20; // Minute
$sql = "UPDATE user SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
$query = mysqli_query($con,$sql);



//******END LOGIN MODULE CHECK ONLINE STATUS*******//


	// $connection = mysql_connect("mysql-5.5.chaiyohosting.com","thei_db","DB_2016");

	


	// Convert Variable Array To Variable
	while(list($xVarName, $xVarvalue) = each($_GET)) {
     ${$xVarName} = $xVarvalue;
	}
 
 
	while(list($xVarName, $xVarvalue) = each($_POST)) {
     ${$xVarName} = $xVarvalue;
}	
 
while(list($xVarName, $xVarvalue) = each($_FILES)) {
     ${$xVarName."_name"} = $xVarvalue['name'];
     ${$xVarName."_type"} = $xVarvalue['type'];
     ${$xVarName."_size"} = $xVarvalue['size'];
     ${$xVarName."_error"} = $xVarvalue['error'];
     ${$xVarName} = $xVarvalue['tmp_name'];
}

foreach($_POST as $key => $val){
  $_POST[$key] = addslashes($val);
}
foreach($_GET as $key => $val){
  $_GET[$key] = addslashes($val);
}

foreach (array_merge($_GET, $_POST) as $key => $val) {
  global $$key;
  $$key = addslashes($val);
}




?>
