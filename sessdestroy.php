<?php    
    session_start(); 
    session_destroy(); 
    header('Location:secondpage.php');  
    exit;  
?> 