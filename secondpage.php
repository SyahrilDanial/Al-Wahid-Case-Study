<!DOCTYPE html>
<?php 
	  include("add.php");
	  error_reporting(0);	  
?>

<html> 
<head>
<button  onclick="window.print()" style="margin:auto;display:block">Print  </button>                     //Faiq Shahmy bin Shalizam 1818897
<link rel="stylesheet" href="design.css">
</head>
<?php
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$id = isset($_SESSION['matricNo']) ? $_SESSION['matricNo'] : '';

	echo $name;
	echo "<br>";
	echo $id;
?>
<body> 
	<h1 align="center">TIME TABLE</h1> 
	<table border="5" cellspacing="0" align="center"> 
		<!--<caption>Timetable</caption>-->
		<tr> 
			<td align="center" height="50"
				width="100"><br> 
				<b>Day/Period</b></br> 
			</td> 
			<td align="center" height="50"
				width="100"> 
				<b>I<br>8:30-09:50</b> 
			</td> 
			<td align="center" height="50"
				width="100"> 
				<b>II<br>10:00-11:20</b> 
			</td> 
			<td align="center" height="50"
				width="100"> 
				<b>III<br>11:30-12:50</b> 
			</td> 
			<td align="center" height="50"
				width="100"> 
				<b>01:00-2:00</b> 
			</td> 
			<td align="center" height="50"
				width="100"> 
				<b>IV<br>02:00-03:20</b> 
			</td> 
			<td align="center" height="50"
				width="100"> 
				<b>V<br>03:30-04:50</b> 
			</td> 
			
		</tr> 
		<tr> 
			<td align="center" height="50"> 
				<b>Monday</b></td> 
			<td align="center" height="50" name="im" id="one">              //Faiq Shahmy bin Shalizam 1818897
			<?php															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('MANAGEMENT INFO SYSTEM', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3304 MANAGEMENT INFO SYSTEM";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>																
			</td> 
			<td align="center" height="50">                                 //Faiq Shahmy bin Shalizam 1818897
			<?php															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('BUSINESS FUNDAMENTALS', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO2201 BUSINESS FUNDAMENTALS";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                  //Faiq Shahmy bin Shalizam 1818897
			<?php															 //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('PROBABILITY & STATISTICS', $arraysubject)) {	 //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3223 PROBABILITY & STATISTICS";					 //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															 //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td rowspan="6" align="center" height="50"> 
				<h2>L<br>U<br>N<br>C<br>H</h2> 
			</td> 
			<td align="center" height="50">                                   //Faiq Shahmy bin Shalizam 1818897
			<?php																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('OBJECT-ORIENTED PROGRAMMING', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3445 OBJECT-ORIENTED PROGRAMMING";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                   //Faiq Shahmy bin Shalizam 1818897
			<?php																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('DATABASE PROGRAMMING', $arraysubject)) {			//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3007 DATABASE PROGRAMMING";							//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
		</tr> 
		<tr> 
			<td align="center" height="50"> 
				<b>Tuesday</b> 
			</td> 
			<td align="center" height="50">                                    //Faiq Shahmy bin Shalizam 1818897
				<?php													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('WEB DEVELOPMENT', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3312 WEB DEVELOPMENT";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                   //Faiq Shahmy bin Shalizam 1818897
			<?php															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('ELEMENTS OF PROGRAMMING', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO1775 ELEMENTS OF PROGRAMMING";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                  //Faiq Shahmy bin Shalizam 1818897
			<?php																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('WEB APPLICATION DEVELOPMENT', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3305 WEB APPLICATION DEVELOPMENT";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                  //Faiq Shahmy bin Shalizam 1818897
			<?php														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('DATA WAREHOUSING', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3115 DATA WAREHOUSING";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                  //Faiq Shahmy bin Shalizam 1818897
			<?php														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('RISK MANAGEMENT', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3777 RISK MANAGEMENT";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			
		</tr> 
		<tr> 
			<td align="center" height="50"> 
				<b>Wednesday</b> 
			</td> 
			<td align="center" height="50">                                  //Faiq Shahmy bin Shalizam 1818897
			<?php															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('MANAGEMENT INFO SYSTEM', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3304 MANAGEMENT INFO SYSTEM";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                   //Faiq Shahmy bin Shalizam 1818897
			<?php															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('TECHNOPRENEURSHIP', $arraysubject)) {			//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO4555 TECHNOPRENEURSHIP";							//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                    //Faiq Shahmy bin Shalizam 1818897
			<?php																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('PROBABILITY & STATISTICS', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3223 PROBABILITY & STATISTICS";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                       //Faiq Shahmy bin Shalizam 1818897
			<?php														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('GAME TECHNOLOGY', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3211 GAME TECHNOLOGY";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td  align="center" height="50">                                       //Faiq Shahmy bin Shalizam 1818897
			<?php														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('DATABASE PROGRAMMING', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3007 DATABASE PROGRAMMING";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
		</tr> 
		<tr> 
			<td align="center" height="50"> 
				<b>Thursday</b> 
			</td> 
			<td align="center" height="50">                                        //Faiq Shahmy bin Shalizam 1818897
			<?php													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('GAME TECHNOLOGY', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3211 GAME TECHNOLOGY";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                         //Faiq Shahmy bin Shalizam 1818897
			<?php															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('BUSINESS FUNDAMENTALS', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO2201 BUSINESS FUNDAMENTALS";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                          //Faiq Shahmy bin Shalizam 1818897
			<?php														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('TECHNOPRENEURSHIP', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO4555 TECHNOPRENEURSHIP";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }														//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                             //Faiq Shahmy bin Shalizam 1818897
			<?php																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('OBJECT-ORIENTED PROGRAMMING', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3445 OBJECT-ORIENTED PROGRAMMING";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?> 
			</td> 
			<td align="center" height="50">                                       //Faiq Shahmy bin Shalizam 1818897
			<?php													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('USRAH BUDI IV', $arraysubject)) {		//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "CCUB4330 USRAH BUDI IV";						//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?> 
			</td> 
		</tr> 
		<tr> 
			<td align="center" height="50"> 
				<b>Friday</b> 
			</td> 
			<td  align="center" height="50">                                    //Faiq Shahmy bin Shalizam 1818897
			<?php													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('WEB DEVELOPMENT', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3312 WEB DEVELOPMENT";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                     //Faiq Shahmy bin Shalizam 1818897
			<?php															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('ELEMENTS OF PROGRAMMING', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO1775 ELEMENTS OF PROGRAMMING";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }															//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                      //Faiq Shahmy bin Shalizam 1818897
			<?php																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('WEB APPLICATION DEVELOPMENT', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3305 WEB APPLICATION DEVELOPMENT";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }																//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                      //Faiq Shahmy bin Shalizam 1818897
			<?php													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('DATA WAREHOUSING', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3115 DATA WAREHOUSING";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
			<td align="center" height="50">                                     //Faiq Shahmy bin Shalizam 1818897
			<?php													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                if (in_array('RISK MANAGEMENT', $arraysubject)) {	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                echo "INFO3777 RISK MANAGEMENT";					//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
                }													//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
            ?>
			</td> 
		</tr> 
    
	</table> 

   



<style></style> 

</html> 
