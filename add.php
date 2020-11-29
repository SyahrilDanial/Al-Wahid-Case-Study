<?php 			//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
    session_start();	//AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
?>			

<body>

<button onclick="document.getElementById('id01').style.display='block'" style="margin:auto;display:block">Add Subject</button>   //MUHAMMAD IZZUDDIN BIN SUHAILI 1818479

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>  //MUHAMMAD IZZUDDIN BIN SUHAILI 1818479
  <form class="modal-content" method="post" action="secondpage.php">
    <div class="container">
      <h1>Add your subjects</h1>
      <hr>
      <label for="subject"><b>Subject</b></label>
      <select name="subject" id="subject">
	  	 <option selected>Select Subject</option>
  		 <option value="MANAGEMENT INFO SYSTEM">INFO3304</option>
  		 <option value="WEB DEVELOPMENT">INFO3312</option>
  		 <option value="BUSINESS FUNDAMENTALS">INFO2201</option>
		   <option value="PROBABILITY & STATISTICS">INFO3223</option>
		   <option value="OBJECT-ORIENTED PROGRAMMING">INFO3445</option>
		   <option value="DATABASE PROGRAMMING">INFO3007</option>
		   <option value="ELEMENTS OF PROGRAMMING">INFO1775</option>
		   <option value="WEB APPLICATION DEVELOPMENT">INFO3305</option>
		   <option value="DATA WAREHOUSING">INFO3115</option>
		   <option value="RISK MANAGEMENT">INFO3777</option>
		   <option value="GAME TECHNOLOGY">INFO3211</option>
		   <option value="TECHNOPRENEURSHIP">INFO4555</option>
		   <option value="USRAH BUDI IV">CCUB4330</option>
		</select> 

      <div class="clearfix">
        <button type="submit" align="center" name="submit" class="add">Add</button>
        <?php                                             //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
        if(isset($_POST['submit'])){                      //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
          echo "<meta http-equiv='refresh' content='0'>"; //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
        }                                                 //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
        ?>
        <a href="sessdestroy.php">Reset</a>
      </div>
    </div>
  </form>
</div>

    <?php                                                                             //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
    $subjects = isset($_POST['subject']) ? $_POST['subject'] : '';                    //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
    $arraysubject = isset($_SESSION['subjectlist']) ? $_SESSION['subjectlist'] : '';  //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603

    if (isset($_POST['submit'])){                                     //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
        $_SESSION['subjectlist'][] = $subjects;                       //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
    }                                                                 //AHMAD SYAHRIL DANIAL BIN CHE ZAINAL 1812603
    ?>                                                                

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body> 
