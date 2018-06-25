<?


session_start();
require('../../db/connect.php');



$type =  $_POST['type'];




switch ($type) {
	case 'ourservice-homepage-eng':  //ourserive homepage

		$sql1 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["textnameeng-1"]."',
														`value` = '".$_POST["textdetailseng-1"]."',
														`value_custom` =  '".$_POST["texticoneng-1"]."' 
														WHERE  `homepage`.`id` =1;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["textnameeng-2"]."',
														`value` = '".$_POST["textdetailseng-2"]."',
														`value_custom` =  '".$_POST["texticoneng-2"]."' 
														WHERE  `homepage`.`id` =2;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["textnameeng-3"]."',
														`value` = '".$_POST["textdetailseng-3"]."',
														`value_custom` =  '".$_POST["texticoneng-3"]."' 
														WHERE  `homepage`.`id` =3;";
		$upQuery3 = mysql_query($sql3);

		# code...
		break;

	case 'ourservice-homepage-th':  //ourserive homepage

		$sql1 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["textnameth-1"]."',
														`value` = '".$_POST["textdetailsth-1"]."',
														`value_custom` =  '".$_POST["texticonth-1"]."' 
														WHERE  `homepage`.`id` =4;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["textnameth-2"]."',
														`value` = '".$_POST["textdetailsth-2"]."',
														`value_custom` =  '".$_POST["texticonth-2"]."' 
														WHERE  `homepage`.`id` =5;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["textnameth-3"]."',
														`value` = '".$_POST["textdetailsth-3"]."',
														`value_custom` =  '".$_POST["texticonth-3"]."' 
														WHERE  `homepage`.`id` =6;";
		$upQuery3 = mysql_query($sql3);

		# code...
		break;

	case 'jobsearch-homepage-eng':  //job search homepage

		$sql1 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitlejobsearcheng"]."',
														`value` = '".$_POST["textdetailsjobsearcheng"]."'
														WHERE  `homepage`.`id` =7;";
		$upQuery1 = mysql_query($sql1);

		# code...
		break;

	case 'jobsearch-homepage-th':  //job search homepage

		$sql1 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitlejobsearchth"]."',
														`value` = '".$_POST["textdetailsjobsearchth"]."'
														WHERE  `homepage`.`id` =8;";
		$upQuery1 = mysql_query($sql1);

		# code...
		break;

	case 'pinjob':  //pinjob homepage

		$sql1 ="UPDATE  `thei_db`.`homepage` SET `value` = '".$_POST["idjob"]."' WHERE  `homepage`.`id` =9;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`homepage` SET `value` = '".$_POST["idjob"]."' WHERE  `homepage`.`id` =10;";
		$upQuery2 = mysql_query($sql2);

		# code...
		break;

	

	case 'testimonials-homepage-eng':

		$sql ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitle1en"]."',
														`value` = '".$_POST["textdetails1en"]."' 
														WHERE  `homepage`.`id` =11;";
		$upQuery = mysql_query($sql);

		$sql2 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitle2-en"]."',
														`value` = '".$_POST["textdetails2-en"]."' 
														WHERE  `homepage`.`id` =13;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitle3-en"]."',
														`value` = '".$_POST["textdetails3-en"]."' 
														WHERE  `homepage`.`id` =15;";
		$upQuery3 = mysql_query($sql3);
		# code...
		break;

	case 'testimonials-homepage-th':

		$sql1 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitle1th"]."',
														`value` = '".$_POST["textdetails1th"]."' 
														WHERE  `homepage`.`id` =12;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitle2-th"]."',
														`value` = '".$_POST["textdetails2-th"]."' 
														WHERE  `homepage`.`id` =14;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`homepage` SET  `key` =  '".$_POST["texttitle3-th"]."',
														`value` = '".$_POST["textdetails3-th"]."' 
														WHERE  `homepage`.`id` =16;";
		$upQuery3 = mysql_query($sql3);
		# code...
		break;


	case 'banner-homepage-link1': //// banner homepage

		$sql1 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink1"]."'
														WHERE  `banner`.`bid` =5;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink2"]."'
														WHERE  `banner`.`bid` =7;";
		$upQuery2 = mysql_query($sql2);

		# code...
		break;

	case 'banner-homepage-link2': //// banner homepage

		$sql1 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink3"]."'
														WHERE  `banner`.`bid` =6;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink4"]."'
														WHERE  `banner`.`bid` =8;";
		$upQuery2 = mysql_query($sql2);

		# code...
		break;

		case 'banner-jobview-link1': //// banner homepage

		$sql1 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink1"]."'
														WHERE  `banner`.`bid` =15;";
		$upQuery1 = mysql_query($sql1);

		

		# code...
		break;

	case 'banner-jobview-link2': //// banner homepage

		$sql1 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink3"]."'
														WHERE  `banner`.`bid` =16;";
		$upQuery1 = mysql_query($sql1);

		# code...
		break;

	case 'banner-newsletters-link1': //// banner newsletters

		$sql1 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink1"]."'
														WHERE  `banner`.`bid` =1;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink2"]."'
														WHERE  `banner`.`bid` =3;";
		$upQuery2 = mysql_query($sql2);

		# code...
		break;

	case 'banner-newsletters-link2': //// banner newsletters

		$sql1 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink3"]."'
														WHERE  `banner`.`bid` =2;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`banner` SET  `linkbanner` =  '".$_POST["textlink4"]."'
														WHERE  `banner`.`bid` =4;";
		$upQuery2 = mysql_query($sql2);

		# code...
		break;

	

	case 'banner-joblist-link1': //// banner joblist1

		$sql1 ="UPDATE  `thei_db`.`banner` SET  	`value_custom` =  '".$_POST["linkeng11"]."',
														`value_custom2` =  '".$_POST["linkeng12"]."',
														`value_custom3` =  '".$_POST["linkeng13"]."',
														`linkbanner` =  '".$_POST["linkeng14"]."'
														WHERE  `banner`.`bid` =9;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`banner` SET  	`value_custom` =  '".$_POST["linkeng21"]."',
														`value_custom2` =  '".$_POST["linkeng22"]."',
														`value_custom3` =  '".$_POST["linkeng23"]."',
														`linkbanner` =  '".$_POST["linkeng24"]."'
														WHERE  `banner`.`bid` =11;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`banner` SET  	`value_custom` =  '".$_POST["linkeng31"]."',
														`value_custom2` =  '".$_POST["linkeng32"]."',
														`value_custom3` =  '".$_POST["linkeng33"]."',
														`linkbanner` =  '".$_POST["linkeng34"]."'
														WHERE  `banner`.`bid` =13;";
		$upQuery3 = mysql_query($sql3);

		

		# code...
		break;

	case 'banner-joblist-link2': //// banner joblist2

		$sql1 ="UPDATE  `thei_db`.`banner` SET  	`value_custom` =  '".$_POST["linkth41"]."',
														`value_custom2` =  '".$_POST["linkth42"]."',
														`value_custom3` =  '".$_POST["linkth43"]."',
														`linkbanner` =  '".$_POST["linkth44"]."'
														WHERE  `banner`.`bid` =10;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`banner` SET  	`value_custom` =  '".$_POST["linkth51"]."',
														`value_custom2` =  '".$_POST["linkth52"]."',
														`value_custom3` =  '".$_POST["linkth53"]."',
														`linkbanner` =  '".$_POST["linkth54"]."'
														WHERE  `banner`.`bid` =12;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`banner` SET  	`value_custom` =  '".$_POST["linkth61"]."',
														`value_custom2` =  '".$_POST["linkth62"]."',
														`value_custom3` =  '".$_POST["linkth63"]."',
														`linkbanner` =  '".$_POST["linkth64"]."'
														WHERE  `banner`.`bid` =14;";
		$upQuery3 = mysql_query($sql3);

		

		# code...
		break;


	case 'our-serice-eng': //// page our serice 

		$sql1 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text1"]."',
														`value` =  '".$_POST["text2"]."'
														WHERE  `our_service`.`oid` =1;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text3"]."',
														`value` =  '".$_POST["text4"]."',
														`value_custom` =  '".$_POST["text5"]."'
														WHERE  `our_service`.`oid` =2;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text6"]."',
														`value` =  '".$_POST["text7"]."',
														`value_custom` =  '".$_POST["text8"]."'
														WHERE  `our_service`.`oid` =3;";
		$upQuery3 = mysql_query($sql3);

		$sql4 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text9"]."',
														`value` =  '".$_POST["text10"]."',
														`value_custom` =  '".$_POST["text11"]."'
														WHERE  `our_service`.`oid` =9;";
		$upQuery4 = mysql_query($sql4);

		

		# code...
		break;

	case 'our-serice-th': //// page our serice 

		$sql1 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text1th"]."',
														`value` =  '".$_POST["text2th"]."'
														WHERE  `our_service`.`oid` =11;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text3th"]."',
														`value` =  '".$_POST["text4th"]."',
														`value_custom` =  '".$_POST["text5th"]."'
														WHERE  `our_service`.`oid` =12;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text6th"]."',
														`value` =  '".$_POST["text7th"]."',
														`value_custom` =  '".$_POST["text8th"]."'
														WHERE  `our_service`.`oid` =13;";
		$upQuery3 = mysql_query($sql3);

		$sql4 ="UPDATE  `thei_db`.`our_service` SET  	`key` =  '".$_POST["text9th"]."',
														`value` =  '".$_POST["text10th"]."',
														`value_custom` =  '".$_POST["text11th"]."'
														WHERE  `our_service`.`oid` =19;";
		$upQuery4 = mysql_query($sql4);

		

		# code...
		break;


	case 'corpo-eng': //// page corporate_overview

		$sql1 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text1"]."'
														WHERE  `corporate_overview`.`cid` =1;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`corporate_overview` SET  	`value` =  '".$_POST["text2"]."',
														`value_custom` =  '".$_POST["text3"]."'
														WHERE  `corporate_overview`.`cid` =2;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text4"]."',
														`value` =  '".$_POST["text5"]."'
														WHERE  `corporate_overview`.`cid` =3;";
		$upQuery3 = mysql_query($sql3);

		$sql4 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text6"]."'
														WHERE  `corporate_overview`.`cid` =4;";
		$upQuery4 = mysql_query($sql4);

		$sql5 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text7"]."',
														`value` =  '".$_POST["text8"]."',
														`value_custom` =  '".$_POST["text9"]."'
														WHERE  `corporate_overview`.`cid` =5;";
		$upQuery5 = mysql_query($sql5);

		$sql6 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text11"]."',
														`value_custom` =  '".$_POST["text10"]."'
														WHERE  `corporate_overview`.`cid` =6;";
		$upQuery6 = mysql_query($sql6);

		$sql7 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text13"]."',
														`value_custom` =  '".$_POST["text12"]."'
														WHERE  `corporate_overview`.`cid` =7;";
		$upQuery7 = mysql_query($sql7);

		$sql8 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text15"]."',
														`value_custom` =  '".$_POST["text14"]."'
														WHERE  `corporate_overview`.`cid` =8;";
		$upQuery8 = mysql_query($sql8);

		$sql9 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text17"]."',
														`value_custom` =  '".$_POST["text16"]."'
														WHERE  `corporate_overview`.`cid` =9;";
		$upQuery9 = mysql_query($sql9);

		$sql10 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text19"]."',
														`value_custom` =  '".$_POST["text18"]."'
														WHERE  `corporate_overview`.`cid` =10;";
		$upQuery10 = mysql_query($sql10);

		$sql11 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text21"]."',
														`value_custom` =  '".$_POST["text20"]."'
														WHERE  `corporate_overview`.`cid` =11;";
		$upQuery11 = mysql_query($sql11);


		# code...
		break;

	case 'corpo-th': //// page corporate_overview

		$sql1 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text1th"]."'
														WHERE  `corporate_overview`.`cid` =12;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`corporate_overview` SET  	`value` =  '".$_POST["text2th"]."',
														`value_custom` =  '".$_POST["text3th"]."'
														WHERE  `corporate_overview`.`cid` =13;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text4th"]."',
														`value` =  '".$_POST["text5th"]."'
														WHERE  `corporate_overview`.`cid` =14;";
		$upQuery3 = mysql_query($sql3);

		$sql4 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text6th"]."'
														WHERE  `corporate_overview`.`cid` =15;";
		$upQuery4 = mysql_query($sql4);

		$sql5 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text7th"]."',
														`value` =  '".$_POST["text8th"]."',
														`value_custom` =  '".$_POST["text9th"]."'
														WHERE  `corporate_overview`.`cid` =16;";
		$upQuery5 = mysql_query($sql5);

		$sql6 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text11th"]."',
														`value_custom` =  '".$_POST["text10th"]."'
														WHERE  `corporate_overview`.`cid` =17;";
		$upQuery6 = mysql_query($sql6);

		$sql7 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text13th"]."',
														`value_custom` =  '".$_POST["text12th"]."'
														WHERE  `corporate_overview`.`cid` =18;";
		$upQuery7 = mysql_query($sql7);

		$sql8 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text15th"]."',
														`value_custom` =  '".$_POST["text14th"]."'
														WHERE  `corporate_overview`.`cid` =19;";
		$upQuery8 = mysql_query($sql8);

		$sql9 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text17th"]."',
														`value_custom` =  '".$_POST["text16th"]."'
														WHERE  `corporate_overview`.`cid` =20;";
		$upQuery9 = mysql_query($sql9);

		$sql10 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text19th"]."',
														`value_custom` =  '".$_POST["text18th"]."'
														WHERE  `corporate_overview`.`cid` =21;";
		$upQuery10 = mysql_query($sql10);

		$sql11 ="UPDATE  `thei_db`.`corporate_overview` SET  	`key` =  '".$_POST["text21th"]."',
														`value_custom` =  '".$_POST["text20th"]."'
														WHERE  `corporate_overview`.`cid` =22;";
		$upQuery11 = mysql_query($sql11);

		

		

		# code...
		break;

	case 'recruitment-eng': //// page recruitment

		$_SESSION[text1] = $_POST["text1"];
		$_SESSION[text2] = $_POST["text2"];

		$sql1 ="UPDATE  `thei_db`.`recruitment_procedure` SET  `key` =  '$_SESSION[text1]', `value` =  '$_SESSION[text2]' WHERE  `recruitment_procedure`.`rid` =1;";
		$upQuery1 = mysql_query($sql1);

		

		$sql2 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text3"]."',
																		`value` =  '".$_POST["text4"]."'
														WHERE  `recruitment_procedure`.`rid` =2;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text5"]."',
																		`value` =  '".$_POST["text6"]."'
														WHERE  `recruitment_procedure`.`rid` =3;";
		$upQuery3 = mysql_query($sql3);

		$sql4 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text7"]."',
																		`value` =  '".$_POST["text8"]."'
														WHERE  `recruitment_procedure`.`rid` =4;";
		$upQuery4 = mysql_query($sql4);

		$sql5 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text9"]."',
																		`value` =  '".$_POST["text10"]."'
														WHERE  `recruitment_procedure`.`rid` =5;";
		$upQuery5 = mysql_query($sql5);

		$sql6 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text11"]."',
																		`value` =  '".$_POST["text12"]."'
														WHERE  `recruitment_procedure`.`rid` =6;";
		$upQuery6 = mysql_query($sql6);

		$sql7 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text13"]."',
																		`value` =  '".$_POST["text14"]."'
														WHERE  `recruitment_procedure`.`rid` =7;";
		$upQuery7 = mysql_query($sql7);

		


		# code...
		break;


	case 'recruitment-th': //// page recruitment

		$sql1 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text1th"]."',
																		`value` =  '".$_POST["text2th"]."'
														WHERE  `recruitment_procedure`.`rid` =13;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text3th"]."',
																		`value` =  '".$_POST["text4th"]."'
														WHERE  `recruitment_procedure`.`rid` =14;";
		$upQuery2 = mysql_query($sql2);

		$sql3 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text5th"]."',
																		`value` =  '".$_POST["text6th"]."'
														WHERE  `recruitment_procedure`.`rid` =15;";
		$upQuery3 = mysql_query($sql3);

		$sql4 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text7th"]."',
																		`value` =  '".$_POST["text8th"]."'
														WHERE  `recruitment_procedure`.`rid` =16;";
		$upQuery4 = mysql_query($sql4);

		$sql5 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text9th"]."',
																		`value` =  '".$_POST["text10th"]."'
														WHERE  `recruitment_procedure`.`rid` =17;";
		$upQuery5 = mysql_query($sql5);

		$sql6 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text11th"]."',
																		`value` =  '".$_POST["text12th"]."'
														WHERE  `recruitment_procedure`.`rid` =18;";
		$upQuery6 = mysql_query($sql6);

		$sql7 ="UPDATE  `thei_db`.`recruitment_procedure` SET  	`key` =  '".$_POST["text13th"]."',
																		`value` =  '".$_POST["text14th"]."'
														WHERE  `recruitment_procedure`.`rid` =19;";
		$upQuery7 = mysql_query($sql7);

		# code...
		break;

	case 'testimonials-title-eng': //// page testimonials

		$sql1 ="UPDATE  `thei_db`.`testimonials` SET  	`key` =  '".$_POST["text1"]."',
																`value` =  '".$_POST["text2"]."'
														WHERE  `testimonials`.`tid` =1;";
		$upQuery1 = mysql_query($sql1);


		# code...
		break;

	case 'testimonials-title-th': //// page testimonials

		$sql1 ="UPDATE  `thei_db`.`testimonials` SET  	`key` =  '".$_POST["text1th"]."',
																`value` =  '".$_POST["text2th"]."'
														WHERE  `testimonials`.`tid` =2;";
		$upQuery1 = mysql_query($sql1);


		# code...
		break;



	case 'contact-eng': //// page contact us

		$sql1 ="UPDATE  `thei_db`.`contact_us` SET  	`value` =  '".$_POST["text1"]."',
															`value_custom` =  '".$_POST["text2"]."',
															`value_custom2` =  '".$_POST["text3"]."',
															`value_custom3` =  '".$_POST["text4"]."'
														WHERE  `contact_us`.`cid` =1;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`contact_us` SET  	`value` =  '".$_POST["text5"]."',
															`value_custom` =  '".$_POST["text6"]."',
															`value_custom2` =  '".$_POST["text7"]."'
														WHERE  `contact_us`.`cid` =2;";
		$upQuery2 = mysql_query($sql2);


		# code...
		break;

	case 'contact-th': //// page contact us

		$sql1 ="UPDATE  `thei_db`.`contact_us` SET  	`value` =  '".$_POST["text1th"]."',
															`value_custom` =  '".$_POST["text2th"]."',
															`value_custom2` =  '".$_POST["text3th"]."',
															`value_custom3` =  '".$_POST["text4th"]."'
														WHERE  `contact_us`.`cid` =4;";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`contact_us` SET  	`value` =  '".$_POST["text5th"]."',
															`value_custom` =  '".$_POST["text6th"]."',
															`value_custom2` =  '".$_POST["text7th"]."'
														WHERE  `contact_us`.`cid` =2;";
		$upQuery2 = mysql_query($sql2);


		# code...
		break;

		


	case 'social-network': //// page contact us

		$sql1 ="UPDATE  `thei_db`.`footer` SET  	`value` =  '".$_POST["text1"]."',
														`value_custom` =  '".$_POST["text2"]."',
														`value_custom2` =  '".$_POST["text3"]."',
														`value_custom3` =  '".$_POST["text4"]."',
														`value_custom4` =  '".$_POST["text5"]."',
														`value_custom5` =  '".$_POST["text6"]."'
														WHERE  `footer`.`ftid` =2;";
		$upQuery1 = mysql_query($sql1);
		
		break;


	case 'slideall': //// page slideall

			$idslide = $_POST["ids"];
			$idslideth = $_POST["idsth"];

		$sql1 ="UPDATE  `thei_db`.`slide_homepage` SET  	`value` =  '".$_POST["text1"]."',
														`value_custom` =  '".$_POST["text3"]."',
														`value_custom2` =  '".$_POST["text5"]."',
														`value_custom3` =  '".$_POST["text7"]."'
														WHERE  `slide_homepage`.`shid` ='$idslide';";
		$upQuery1 = mysql_query($sql1);

		$sql2 ="UPDATE  `thei_db`.`slide_homepage` SET  	`value` =  '".$_POST["text2"]."',
														`value_custom` =  '".$_POST["text4"]."',
														`value_custom2` =  '".$_POST["text6"]."',
														`value_custom3` =  '".$_POST["text7"]."'
														WHERE  `slide_homepage`.`shid` ='$idslideth';";
		$upQuery2 = mysql_query($sql2);
		# code...
		break;

	case 'testimonials-add': //// page testimonials

		

		$sql1 = "INSERT INTO `testimonials_detail`( `key`, `value`,  `value_custom`,  `value_custom2`, `value_custom4`, `value_custom5`, `value_custom6`) VALUES (															'".$_POST["text1"]."',
																'".$_POST["text3"]."',
																'".$_POST["text5"]."',
																'".$_SESSION["filenametestimonials"]."',
																'".$_POST["text2"]."',
																'".$_POST["text4"]."',
																'".$_POST["text6"]."' )";
		$upQuery1 = mysql_query($sql1);

		unset($_SESSION["filenametestimonials"]);
		# code...
		break;


	case 'testimonials-edit': //// page testimonials

			$tid = $_POST["tid"];

		$sql1 ="UPDATE  `thei_db`.`testimonials_detail` SET  `key` =  '".$_POST["text1"]."',
																	`value` =  '".$_POST["text3"]."',
																	`value_custom` =  '".$_POST["text5"]."',
																	`value_custom4` =  '".$_POST["text2"]."',
																	`value_custom5` =  '".$_POST["text4"]."',
																	`value_custom6` =  '".$_POST["text6"]."'
														WHERE  `testimonials_detail`.`tdid` ='$tid';";
		$upQuery1 = mysql_query($sql1);
		# code...
		break;



	case 'add-job': //// add job

		$sql1 = "INSERT INTO `jobs_value`( `job_id`, `created_date`,  `province_id`,  `salary_start`, `salary_end`, `negotiable`, `language_code`, `title`, `detail`, `job_requirement`,`category`, `industry`,`amphur_id`) VALUES (   '".$_POST["jobid"]."',
																CURRENT_TIMESTAMP,
																'".$_POST["text2"]."',
																'".$_POST["text3"]."',
																'".$_POST["text4"]."',
																'".$_POST["text5"]."',
																'en',
																'".$_POST["text1"]."',
																'".$_POST["q"]."',
																'".$_POST["r"]."',
																'".$_POST["text6"]."',
																'".$_POST["text7"]."',
																'".$_POST["textamphur"]."')";
		$upQuery1 = mysql_query($sql1);

		$sql2 = "INSERT INTO `jobs_value`( `job_id`, `created_date`,  `province_id`,  `salary_start`, `salary_end`, `negotiable`, `language_code`, `title`, `detail`, `job_requirement`,`category`, `industry`,`amphur_id`) VALUES (   '".$_POST["jobid"]."',
																CURRENT_TIMESTAMP,
																'".$_POST["text2"]."',
																'".$_POST["text3"]."',
																'".$_POST["text4"]."',
																'".$_POST["text5"]."',
																'th',
																'".$_POST["text1th"]."',
																'".$_POST["q2"]."',
																'".$_POST["r2"]."',
																'".$_POST["text6"]."',
																'".$_POST["text7"]."',
																'".$_POST["textamphur"]."')";
		$upQuery2 = mysql_query($sql2);
	
		# code...
		break;

	case 'edit-job': //// add job

		$getidjob = $_POST[jobid];

		$sql1 ="UPDATE  `thei_db`.`jobs_value` SET  	`province_id` =  '".$_POST["text2"]."',
														`salary_start` =  '".$_POST["text3"]."',
														`salary_end` =  '".$_POST["text4"]."',
														`negotiable` =  '".$_POST["text5"]."',
														`title` =  '".$_POST["text1"]."',
														`detail` =  '".$_POST["q"]."',
														`job_requirement` =  '".$_POST["r"]."',
														`category` =  '".$_POST["text6"]."',
														`industry` =  '".$_POST["text7"]."'
														WHERE  `jobs_value`.`job_id` ='$getidjob' AND `jobs_value`.`language_code` = 'en' ;";
		$upQuery1 = mysql_query($sql1);
		
		

		$sql2 ="UPDATE  `thei_db`.`jobs_value` SET  	`province_id` =  '".$_POST["text2"]."',
														`salary_start` =  '".$_POST["text3"]."',
														`salary_end` =  '".$_POST["text4"]."',
														`negotiable` =  '".$_POST["text5"]."',
														`title` =  '".$_POST["text1th"]."',
														`detail` =  '".$_POST["q2"]."',
														`job_requirement` =  '".$_POST["r2"]."',
														`category` =  '".$_POST["text6"]."',
														`industry` =  '".$_POST["text7"]."'
														WHERE  `jobs_value`.`job_id` ='$getidjob' AND `jobs_value`.`language_code` = 'th' ;";
		$upQuery2 = mysql_query($sql2);
	
		
	
		# code...
		break;


	case 'add-article': //// add job
		$sql1 = "INSERT INTO `newsletter`( `article_id`, `category_id`,  `language_code`,  `location`, `topic`, `detail`, `created_date`, `value`) VALUES (															'".$_POST["articleid"]."',
																'".$_POST["text1"]."',
																'en',
																'".$_POST["category"]."',
																'".$_POST["text2"]."',
																'".$_POST["q"]."',
																CURRENT_TIMESTAMP,
																'".$_POST["text10"]."')";
		$upQuery1 = mysql_query($sql1);

		$sql2 = "INSERT INTO `newsletter`( `article_id`, `category_id`,  `language_code`, `location`, `topic`, `detail`,`created_date` , `value`) VALUES (															'".$_POST["articleid"]."',
																'".$_POST["text1"]."',
																'th',
																'".$_POST["category"]."',
																'".$_POST["text2th"]."',
																'".$_POST["r"]."',
																CURRENT_TIMESTAMP,
																'".$_POST["text10th"]."')";
		$upQuery2 = mysql_query($sql2);
	
		# code...
		break;

	case 'edit-article': //// add job

		$getidarticle = $_POST[articleid];
		

		$sql1 ="UPDATE  `thei_db`.`newsletter` SET  	`category_id` =  '".$_POST["text1"]."',
														`location` =  '".$_POST["category"]."',
														`topic` =  '".$_POST["text2"]."',
														`detail` =  '".$_POST["q"]."',
														`value` =  '".$_POST["text10"]."'
														WHERE  `newsletter`.`article_id` ='$getidarticle' AND `newsletter`.`language_code` = 'en' ;";
		$upQuery1 = mysql_query($sql1);
		
		
		$sql2 ="UPDATE  `thei_db`.`newsletter` SET  	`category_id` =  '".$_POST["text1"]."',
														`location` =  '".$_POST["category"]."',
														`topic` =  '".$_POST["text2th"]."',
														`detail` =  '".$_POST["r"]."',
														`value` =  '".$_POST["text10th"]."'
														WHERE  `newsletter`.`article_id` ='$getidarticle' AND `newsletter`.`language_code` = 'th' ;";
		
		$upQuery2 = mysql_query($sql2);
	
		
	
		# code...
		break;

	case 'slide-newsletter': //// add job

		$sql1 ="UPDATE  `thei_db`.`newsletter_slide` SET `newsletter_id` =  '".$_POST["idarticle"]."' WHERE  `newsletter_slide`.`id` =1;";
		$upQuery1 = mysql_query($sql1);
		
		# code...
		break;

	case 'referral-friend': //// add job

		$sql1 ="UPDATE `thei_db`.`referral_friend` SET `value` = '".$_POST["e"]."' WHERE `referral_friend`.`language_code` = 'en';";
		$upQuery1 = mysql_query($sql1);
		
		$sql2 ="UPDATE `thei_db`.`referral_friend` SET `value` = '".$_POST["t"]."' WHERE `referral_friend`.`language_code` = 'th';";
		$upQuery2 = mysql_query($sql2);
		
		# code...
		break;




	


	default:
		# code...
		break;
}




?>