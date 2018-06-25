<?session_start();?>
<?
	require('connect.php');

	
?>

<!DOCTYPE HTML>
<html>  

<body>


<? echo var_dump($_POST["name"]); ?>
<? echo var_dump($_POST["email"]); ?>
</body>
</html>