<?php
	// выход пользователя из системы
session_start();
// Destroy session

//session_destroy();
//header("Location: register.php");
//echo $_SESSION['session_Username'];
session_destroy();
header("Location: ../index.html");
//if(session_destroy()) {
//    // Redirecting To Home Page
//    header("Location: index.html");
//}
	?>