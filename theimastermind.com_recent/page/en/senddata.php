<?

session_start();
require('../../db/connect.php');

$type = $_POST['type'];




switch ($type) {
	
		case 'find-talents':  //ourserive homepage

		$sql1 = "INSERT INTO `thei_db`.`find_peoples` (`created_at`, `name`, `email`, `tel`, `country`, 
							 `position`, `message`) 
				       VALUES (CURRENT_TIMESTAMP, 
				       '".$_POST["text1"]."', 
				       '".$_POST["text2"]."', 
				       '".$_POST["text3"]."', 
				       '".$_POST["text4"]."', 
				       '".$_POST["text5"]."', 
				       '".$_POST["text6"]."');";
		$upQuery1 = mysql_query($sql1);

		$_SESSION["nameft"] = $_POST["text1"];
		$_SESSION["emailft"] = $_POST["text2"];
		$_SESSION["phoneft"] = $_POST["text3"];
		$_SESSION["countryft"] = $_POST["text4"];
		$_SESSION["posittionft"] = $_POST["text5"];
		$_SESSION["messageft"] = $_POST["text6"];


		# code...
		break;

		case 'contact-us':  //ourserive homepage

		$sql1 = "INSERT INTO `thei_db`.`contact_msg` (`created_date`, `name`, `surname`, `email`, 
							 `phone`, `company_name`, `subject`, `message`) 
				       VALUES (CURRENT_TIMESTAMP, 
				       '".$_POST["text1"]."', 
				       '".$_POST["text2"]."', 
				       '".$_POST["text3"]."', 
				       '".$_POST["text4"]."', 
				       '".$_POST["text5"]."', 
				       '".$_POST["text6"]."',
				       '".$_POST["text7"]."');";
		$upQuery1 = mysql_query($sql1);

		$_SESSION["firstnamecu"] = $_POST["text1"];
		$_SESSION["lastnamecu"] = $_POST["text2"];
		$_SESSION["emailcu"] = $_POST["text3"];
		$_SESSION["phonecu"] = $_POST["text4"];
		$_SESSION["companycu"] = $_POST["text5"];
		$_SESSION["subjectcu"] = $_POST["text6"];
		$_SESSION["messagecu"] = $_POST["text7"];

		# code...
		break;


		case 'referral-friend':  //ourserive homepage
		
		$_SESSION["emailrf"] = $_POST["text3"];
		$_SESSION["firstnamerf"] = $_POST["text1"];
		$_SESSION["lastnamerf"] = $_POST["text2"];
		$_SESSION["phonerf"] = $_POST["text4"];
		$_SESSION["companyrf"] = $_POST["text5"];
		$_SESSION["subjectrf"] = $_POST["text6"];
		$_SESSION["jobidrf"] = $_POST["text7"];
		$_SESSION["messagerf"] = $_POST["text8"];
		$_SESSION["namejobrf"] = $_POST["Jobrefer"];

		$sql1 = "INSERT INTO `thei_db`.`referral_friend_detail` (`firstname`, `surname`, `email`, 
							 `phone`, `company_name`, `subject`, `job_refer`, `message`, `created_at`) 
				       VALUES ('".$_POST["text1"]."', 
				       '".$_POST["text2"]."', 
				       '".$_POST["text3"]."', 
				       '".$_POST["text4"]."', 
				       '".$_POST["text5"]."', 
				       '".$_POST["text6"]."', 
				       '".$_POST["text7"]."', 
				       '".$_POST["text8"]."', 
				       CURRENT_TIMESTAMP);";
		$upQuery1 = mysql_query($sql1);

		# code...
		break;

		case 'personaldetail':  //create resume

		 if ($_POST["statusbtn1"] == 0) {

		 		$sql1 = "INSERT INTO `thei_db`.`resumes` (`resume_id`, `first_name`, 
							 `surname`, `email`, `mobile_phone`, `applied_position`, `current_position`,
							 `nationality`,`date_of_birth`,`sex`,`status`, `communication`) 
				       VALUES ('".$_POST["resumeid"]."','".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["applied-position"]."','".$_POST["current-position"]."','".$_POST["nationality"]."','".$_POST["datebirth"]."','".$_POST["radio-sex"]."','".$_POST["radio-status"]."','".$_POST["comsent"]."');";
				$upQuery1 = mysql_query($sql1);
		 }
		 else {

		 		$sql1 ="UPDATE  `thei_db`.`resumes` SET  `first_name` =  '".$_POST["firstname"]."',
														`surname` =  '".$_POST["lastname"]."',
														`email` =  '".$_POST["email"]."',
														`mobile_phone` =  '".$_POST["phone"]."',
														`applied_position` =  '".$_POST["applied-position"]."',
														`current_position` =  '".$_POST["current-position"]."',
														`nationality` =  '".$_POST["nationality"]."',
														`date_of_birth` =  '".$_POST["datebirth"]."',
														`sex` =  '".$_POST["radio-sex"]."',
														`status` =  '".$_POST["radio-status"]."',
														`communication` =  '".$_POST["comsent"]."'
														WHERE  `resumes`.`resume_id` ='".$_POST["resumeid"]."';";
				$upQuery1 = mysql_query($sql1);		

		 }
		

		# code...
		break;

		

		case 'qualifications':  //create resume

			if ($_POST["statusbtna"] == 0) {

				///////////
					for ($x = 1; $x <= $_POST["numq"]; $x++) {

						$school = "school_".$x;
						$major = "major_".$x;
						$edu = "education-level_".$x;
						$year = "year_".$x;
						$itemid = "itemid_".$x;

						if ($_POST[$school] == "") {}
						else {
							$sql1 = "INSERT INTO `thei_db`.`academic_qualifications` (`resume_id`, `school_university`, 
							 `major`, `edu_level`, `year`,`item_id`) 
						       VALUES ('".$_POST["resumeid"]."','".$_POST[$school]."', '".$_POST[$major]."','".$_POST[$edu]."','".$_POST[$year]."','".$_POST[$itemid]."');";
							$upQuery1 = mysql_query($sql1);
							# code...
						}	// check text 
					} 
				/////////
			}

			else {

				///////////
					for ($x = 1; $x <= $_POST["numq"]; $x++) {

						$school = "school_".$x;
						$major = "major_".$x;
						$edu = "education-level_".$x;
						$year = "year_".$x;
						$itemid = "itemid_".$x;

						if ($_POST[$school] == "") {}
						else {

										$result =mysql_query("SELECT * FROM academic_qualifications WHERE `resume_id` ='".$_POST["resumeid"]."' AND `item_id` = '".$_POST[$itemid]."' ");
										if ($result && mysql_num_rows($result) > 0)
										    {

										        $sql1 ="UPDATE  `thei_db`.`academic_qualifications` SET  `school_university` =  '".$_POST[$school]."',
														`major` =  '".$_POST[$major]."',
														`edu_level` =  '".$_POST[$edu]."',
														`year` =  '".$_POST[$year]."'
														WHERE  `academic_qualifications`.`resume_id` ='".$_POST["resumeid"]."' AND `academic_qualifications`.`item_id` = '".$_POST[$itemid]."'  ;";
												$upQuery1 = mysql_query($sql1);
										    }
										else
										    {
										    	$sql1 = "INSERT INTO `thei_db`.`academic_qualifications` (`resume_id`, `school_university`, 
												 `major`, `edu_level`, `year`,`item_id`) 
											       VALUES ('".$_POST["resumeid"]."','".$_POST[$school]."', '".$_POST[$major]."','".$_POST[$edu]."','".$_POST[$year]."','".$_POST[$itemid]."');";
												$upQuery1 = mysql_query($sql1);
										    }
													
						}	// check text 
					} 
				/////////

			}

				

		# code...
		break;

		case 'experience':  //create resume

		if ($_POST["statusbtn2"] == 0) {

				///////////
				for ($x = 1; $x <= $_POST["nume"]; $x++) {

					$companyname = "company-name_".$x;
					$monthstart = "month-start-work_".$x;
					$yearstart = "yearstart_".$x;
					$monthend = "month-end-work_".$x;
					$yearend = "yearend_".$x;
					$position = "position_".$x;
					$report = "report-to_".$x;
					$numsub = "num-subordinate_".$x;
					$keya = "Key-Achievement_".$x;
					$keyr = "Key-Responsibility_".$x;
					$reason = "Reason-Leaving_".$x;
					$itemid = "itemid_".$x;
					$present = "present_".$x;

					if ($_POST[$companyname] == "") {}
					else {

			$title1 = $_POST[$keya];
			$title2 = $_POST[$keyr];
			$title3 = $_POST[$reason];
			
            $titleconvert1 = str_replace("'","%27" ,$title1);
            $titleconvert2 = str_replace("'","%27", $title2);
            $titleconvert3 = str_replace("'","%27", $title3);
            
					$sql1 = "INSERT INTO `thei_db`.`professional_experience` (`resume_id`, `company_name`, 
							 `start_month`, `start_year`, `end_month`, `end_year`, `position`,
							 `report_to`,`num_of_sub`,`key_achieve`,`key_respon`, `reason_for_leave`,`item_id`,`status_present`) 
				       VALUES ('".$_POST["resumeid"]."','".$_POST[$companyname]."', '".$_POST[$monthstart]."','".$_POST[$yearstart]."','".$_POST[$monthend]."','".$_POST[$yearend]."','".$_POST[$position]."','".$_POST[$report]."','".$_POST[$numsub]."','".$titleconvert1."','".$titleconvert2."','".$titleconvert3."','".$_POST[$itemid]."','".$_POST[$present]."');";
					$upQuery1 = mysql_query($sql1);

					}
				}
				//////////
		}

		else {

				///////////
				for ($x = 1; $x <= $_POST["nume"]; $x++) {

					$companyname = "company-name_".$x;
					$monthstart = "month-start-work_".$x;
					$yearstart = "yearstart_".$x;
					$monthend = "month-end-work_".$x;
					$yearend = "yearend_".$x;
					$position = "position_".$x;
					$report = "report-to_".$x;
					$numsub = "num-subordinate_".$x;
					$keya = "Key-Achievement_".$x;
					$keyr = "Key-Responsibility_".$x;
					$reason = "Reason-Leaving_".$x;
					$itemid = "itemid_".$x;
					$present = "present_".$x;

					if ($_POST[$companyname] == "") {}
					else {

							$result =mysql_query("SELECT * FROM professional_experience WHERE `resume_id` ='".$_POST["resumeid"]."' AND `item_id` = '".$_POST[$itemid]."' ");
							if ($result && mysql_num_rows($result) > 0)
							    {
							    	  $sql1 ="UPDATE  `thei_db`.`professional_experience` SET  `company_name` =  '".$_POST[$companyname]."',
														`start_month` =  '".$_POST[$monthstart]."',
														`start_year` =  '".$_POST[$yearstart]."',
														`end_month` =  '".$_POST[$monthend]."',
														`end_year` =  '".$_POST[$yearend]."',
														`position` =  '".$_POST[$position]."',
														`report_to` =  '".$_POST[$report]."',
														`num_of_sub` =  '".$_POST[$numsub]."',
														`key_achieve` =  '".$_POST[$keya]."',
														`key_respon` =  '".$_POST[$keyr]."',
														`reason_for_leave` =  '".$_POST[$reason]."',
														`status_present` =  '".$_POST[$present]."'
														WHERE  `professional_experience`.`resume_id` ='".$_POST["resumeid"]."' AND `professional_experience`.`item_id` = '".$_POST[$itemid]."';";
									$upQuery1 = mysql_query($sql1);
							    }
							else
							    {

							    	$sql1 = "INSERT INTO `thei_db`.`professional_experience` (`resume_id`, `company_name`, 
											 `start_month`, `start_year`, `end_month`, `end_year`, `position`,
											 `report_to`,`num_of_sub`,`key_achieve`,`key_respon`, `reason_for_leave`,`item_id`,`status_present`) 
								       VALUES ('".$_POST["resumeid"]."','".$_POST[$companyname]."', '".$_POST[$monthstart]."','".$_POST[$yearstart]."','".$_POST[$monthend]."','".$_POST[$yearend]."','".$_POST[$position]."','".$_POST[$report]."','".$_POST[$numsub]."','".$_POST[$keya]."','".$_POST[$keyr]."','".$_POST[$reason]."','".$_POST[$itemid]."','".$_POST[$present]."');";
									$upQuery1 = mysql_query($sql1);
							    	
							    }

					

					}
				}
				//////////

		}

				
		

		# code...
		break;

		

		case 'other':  //create resume

		if ($_POST["jobid"] == 0) {

			$sql1 ="UPDATE  `thei_db`.`resumes` SET  `image` =  '".$_SESSION["imageresume"]."',
														`salary` =  '".$_POST["Current-Salary"]."',
														`fix_bonus` =  '".$_POST["fix-Bonus"]."',
														`variable_bonus` =  '".$_POST["Variable-Bonus"]."',
														`other_allowance_salary` =  '".$_POST["Other-Allowance"]."',
														`expectation_salary` =  '".$_POST["Expectation"]."',
														`notice_period` =  '".$_POST["period"]."'
														WHERE  `resumes`.`resume_id` ='".$_POST["resumeid"]."';";
			$upQuery1 = mysql_query($sql1);		

			unset($_SESSION["imageresume"]);
		}
		else {

			$sql1 ="UPDATE  `thei_db`.`resumes` SET  `image` =  '".$_SESSION["imageresume"]."',
														`salary` =  '".$_POST["Current-Salary"]."',
														`fix_bonus` =  '".$_POST["fix-Bonus"]."',
														`variable_bonus` =  '".$_POST["Variable-Bonus"]."',
														`other_allowance_salary` =  '".$_POST["Other-Allowance"]."',
														`expectation_salary` =  '".$_POST["Expectation"]."',
														`notice_period` =  '".$_POST["period"]."',
														`status_resume` =  '1',
														`job_id` =  '".$_POST["jobid"]."'
														WHERE  `resumes`.`resume_id` ='".$_POST["resumeid"]."';";
			$upQuery1 = mysql_query($sql1);		

			unset($_SESSION["imageresume"]);

		}



		

		# code...
		break;

		

		case 'removequalifications':  //create resume


		$sql1 ="DELETE FROM `thei_db`.`academic_qualifications` WHERE `academic_qualifications`.`resume_id` = '".$_POST["idresume"]."' AND 	`academic_qualifications`.`item_id` = '".$_POST["itemid"]."';";
		$upQuery1 = mysql_query($sql1);

		# code...
		break;

		case 'removeexperience':  //create resume


		$sql1 ="DELETE FROM `thei_db`.`professional_experience` WHERE `professional_experience`.`resume_id` = '".$_POST["idresume"]."' AND 	`professional_experience`.`item_id` = '".$_POST["itemid"]."';";
		$upQuery1 = mysql_query($sql1);

		# code...
		break;

		case 'uploadresume':  //create resume


				$sql1 = "INSERT INTO `thei_db`.`resumes` (`resume_id`, `first_name`, 
							 `surname`, `email`, `mobile_phone`, `resume_file`, `job_id`,`status_resume`) 
				       VALUES ('".$_POST["resumeid"]."','".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_SESSION["filenameresume"]."','".$_POST["jobid"]."','2');";
				$upQuery1 = mysql_query($sql1);

				unset($_SESSION["filenameresume"]);

		# code...
		break;

		case 'uploadresumenojob':  //create resume


				$sql1 = "INSERT INTO `thei_db`.`resumes` (`resume_id`, `first_name`, 
							 `surname`, `email`, `mobile_phone`, `resume_file`,`status_resume`, `applied_position`) 
				       VALUES ('".$_POST["resumeid"]."','".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_SESSION["filenameresume"]."','3','".$_POST["aposition"]."');";
				$upQuery1 = mysql_query($sql1);
				
				unset($_SESSION["filenameresume"]);

		# code...
		break;





	default:
		# code...
		break;
}































?>