<?php 
session_start();
require('../../db/connect.php');

$getresume = $_GET[idresume];

include("../../assets/plugins/mpdf/mpdf.php");
$mpdf=new mPDF('win-1252','A4','','',15,10,16,10,10,10);//A4 page in portrait for landscape add -L.
// $mpdf->SetHeader('|Your Header here|');
// $mpdf->setFooter('{PAGENO}');// Giving page number to your footer.
$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetDisplayMode('fullpage');
// Buffer the following html with PHP so we can store it to a variable later
ob_start();


?>

<?php
  
$getresume1 = $getresume;
include 'generatorpdf.php';
 //This is your php page ?>
<?php 
$html = ob_get_contents();
ob_end_clean();
// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);
//$mpdf->SetProtection(array(), 'user', 'password'); uncomment to protect your pdf page with password.
$namepdf = "resume".$getresume.".pdf";
$mpdf->Output("../../uploadfile/resume/file/resume{$getresume}.pdf");

$sql1 ="UPDATE  `thei_db`.`resumes` SET  `resume_file` =  '$namepdf' WHERE  `resumes`.`resume_id` ='$getresume';";
$upQuery1 = mysql_query($sql1);		

exit;
?>