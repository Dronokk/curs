<?php require_once("connection.php"); ?>
<?php


    if(isset($_SESSION['session_Username']) !== 0){
        header('Location: intropage.php');
    }


	// запрет на вывод ошибок php
	ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
	// запрет на вывод ошибок php

	if(isset($_POST["register"])){
	
	if(!empty($_POST['Surname']) && !empty($_POST['Name']) && !empty($_POST['Patronymic']) && !empty($_POST['Mail']) && !empty($_POST['Username']) && !empty($_POST['Password'])) {
    $Surname= htmlspecialchars($_POST['Surname']);
    $Name= htmlspecialchars($_POST['Name']);
    $Patronymic= htmlspecialchars($_POST['Patronymic']);
	$Mail=htmlspecialchars($_POST['Mail']);
    $Username=htmlspecialchars($_POST['Username']);
    $Password=htmlspecialchars($_POST['Password']);
    $n1=mysqli_connect("localhost","root","","RHYTHMICS");
    $query=mysqli_query("SELECT * FROM usertbl WHERE Username='".$Username."'");
    $numrows=mysqli_num_rows($n1,$query);
if($numrows==0)
   {
	$sql="INSERT INTO Client
  (Surname, Name, Patronymic, Mail, Username, Password)
	VALUES('$Surname', '$Name', '$Patronymic', '$Mail', '$Username', '$Password')";
  $result=mysqli_query($n1, $sql);
 if($result){
	$message = "Регистрация прошла успешно!";
} else {
 $message = "Форма регистрации пустая!";
  }
	} else {
	$message = "Это имя пользователя уже существует! Используйте другое имя!";
   }
	} else {
	$message = "Все поля обязательны для заполнения!";
	}
	}
	?>