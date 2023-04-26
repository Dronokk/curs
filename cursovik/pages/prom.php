<?php
    if(!isset($_SESSION['session_Username']) !== 0){
        header('Location: intropage.php');
        //echo $_SESSION['session_Username']."intropage.php";
        exit();
    } 
        header('Location: login.php');
    
?>
