

<?php 


require("act_session.php");
require_once("connection.php"); 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHYTHMICS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/header/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/profile3.css">
    <link rel="stylesheet" href="../css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<body>

    <header class="header">
        <div class="container">
            <!-- Header nav -->
            <div class="header-nav">
                <a href="#!" class="logo">
                    <picture>
                    <source media="(max-width: 100)">
                    <img width="100px" src="../img/header/logo.svg" alt="">
                </picture></a>
                <nav id="nav" class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="../index.html" class="nav-link active">Главная</a></li>
                        <li class="nav-item"><a href="prom.php" class="nav-link">Профиль</a></li>
                        <li class="nav-item"><a href="katalog.php" class="nav-link">Каталог</a></li>
                        <li class="nav-item"><a href="katalog.php" class="nav-link">Корзина</a></li>
                        <li class="nav-item"><a href="#foot" class="nav-link">Контакты</a></li>
                    </ul>
                    <button id="nav-btn" class="nav-button">
                        <img id="nav-btn-img" src="../img/icons/nav-open.svg" alt="Nav button">
                    </button>
                </nav>
            </div>

            <!-- Header content -->
            <div class="header-row">

                <div class="header-content">
                    <h1 class="header-heading">СПОРТ - <br> <span>НАША ЖИЗНЬ</span></h1>
                    <p>Всё для спорта, вы найдёте у нас, по лучшим ценам!</p>
                </div>

                <div class="header-img">

                    <picture>
                        <img width="493px" height="613px" src="../img/header/main.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </header>
	<body>

    <div class="contacts-title">
                <h2 class="title-1">Профиль</h2>
            </div>

            <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
        <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <h6 class="f-w-600"><?php echo $_SESSION['session_Username'];?></h6>
                        <p><?php echo $_SESSION['session_Name'];?></p>
                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                        <p><a href="logout.php">Выйти</a> из системы</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Информация</h6>
                        <div class="row">
                            <div class="mail col-sm-10">
                                <p class="m-b-10 f-w-600">Почта</p>
                                <h6 class="text-muted f-w-400"><?php echo $_SESSION['session_Mail'];?></h6>
                            </div>

                        </div>
                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Счёт</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Баланс</p>
                                <h6 class="text-muted f-w-400"><?php echo $_SESSION['session_Credit_account'];?>Р</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Заказы</p>
                                <h6 class="text-muted f-w-400">2</h6>
                            </div>
                        </div>
                        <ul style="margin-top: 30px;" class="foot">
                <li style="--i:#a955ff;--j:#ea51ff;">
                  <span class="icon"><i class="fa fa-facebook"></i></span>
                  <span class="titulo">facebook</span>
                </li>
                <li style="--i:#56CCF2;--j:#2F80ED;">
                  <span class="icon"><i class="fa fa-twitter"></i></span>
                  <span class="titulo">twitter</span>
                </li>
                <li style="--i:#FFA9C6;--j:#F434E2;">
                  <span class="icon"><i class="fa fa-instagram"></i></span>
                  <span class="titulo">instagram</span>
                </li>
              </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        </div>
    </div>

    <!-- <div id="welcome">
    <h2>Добро пожаловать, <span><?php //echo $_SESSION['session_username'];?>! </span></h2>
    <p><a href="logout.php">Выйти</a> из системы</p>
    </div> -->
		
		<footer id="foot" class="contacts">
        <div class="container">
            <div class="contacts-title">
                <h2 class="title-1">Контакты</h2>
            </div>
            <div class="contacts-content">
                <p>Хотите узнать больше?<br> Мы всегда на связи!</p>
            </div>
            <div class="contacts-button">
                <a href="#!" class="butn">Написать сообщение</a>
            </div>
            <ul class="foot">
                <li style="--i:#a955ff;--j:#ea51ff;">
                  <span class="icon"><i class="fa fa-facebook"></i></span>
                  <span class="titulo">facebook</span>
                </li>
                <li style="--i:#56CCF2;--j:#2F80ED;">
                  <span class="icon"><i class="fa fa-twitter"></i></span>
                  <span class="titulo">twitter</span>
                </li>
                <li style="--i:#86be6b;--j:#1baf16;">
                  <span class="icon"><i class="fa fa-whatsapp"></i></span>
                  <span class="titulo">whatsapp</span>
                </li>
                <li style="--i:#80FF72;--j:#5ec3d4;">
                  <span class="icon"><i class="fa fa-linkedin"></i></span>
                  <span class="titulo">linkedin</span>
                </li>
                <li style="--i:#FFA9C6;--j:#F434E2;">
                  <span class="icon"><i class="fa fa-instagram"></i></span>
                  <span class="titulo">instagram</span>
                </li>
              </ul>
        </div>
    </footer>

</body>
</html>
        
    