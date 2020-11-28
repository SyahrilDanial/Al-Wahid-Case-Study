<?php
	session_start();
	
	$subjects = isset($_POST['subject']) ? $_POST['subject'] : '';

	//$_SESSION["subjects"] = $subjects;

	$schedule = array (
		array("INFO3304", "MANAGEMENT INFO SYSTEM"),
		array("INFO3312", "WEB DEVELOPMENT"),
		array("INFO2201", "BUSINESS FUNDAMENTALS"),
		array("INFO3223", "PROBABILITY & STATISTICS"),
		array("INFO3445", "OBJECT-ORIENTED PROGRAMMING"),
		array("INFO3007", "DATABASE PROGRAMMING"),
		array("INFO1775", "ELEMENTS OF PROGRAMMING"),
		array("INFO3305", "WEB APPLICATION DEVELOPMENT"),
		array("INFO3115", "DATA WAREHOUSING"),
		array("INFO3777", "RISK MANAGEMENT"),
		array("INFO3211", "GAME TECHNOLOGY"),
		array("INFO4555", "TECHNOPRENEURSHIP"),
		array("CCUB4330", "USRAH BUDI IV")
	  );
	
	  $_SESSION["schedule"] = $schedule;
?>