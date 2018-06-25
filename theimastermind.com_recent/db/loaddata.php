<?

session_start();
  	require('connect.php');

  	// load data from database member
  	$strSQL = "SELECT * FROM user WHERE user_id = '".$_SESSION['user_id']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

	$nameuser = $objResult["username"];


?>