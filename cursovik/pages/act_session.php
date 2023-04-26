<?php

    session_start();

    if(!isset($_SESSION["session_Username"])){
        header("location: login.php");
        //exit();
    }
   

?>