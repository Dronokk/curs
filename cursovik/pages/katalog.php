<?php
error_reporting(-1);
session_start();
require_once '../inc/db.php';
require_once '../inc/funcs.php';
$products = get_products();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHYTHMICS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../css/katalog.css">
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
                        <li class="nav-item"><a href="#" class="nav-link">Каталог</a></li>
                        <li class="nav-item"><a href="#!" class="nav-link"><button id="get-cart" type="button" data-toggle="modal" data-target="#cart-modal">
                    Корзина <span class="badge badge-light mini-cart-qty"><?= $_SESSION['cart.qty'] ?? 0 ?></span></button></a></li></a></li>
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

<div class="portfolio-title">
    <h2 class="title-1">Каталог</h2>
</div>

<?php //debug($_SESSION); session_destroy(); ?>

<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="product-card">

                            <div class="card-thumb">
                                <a href="#"><img src="../img/katalog/<?= $product['img'] ?>" alt="<?= $product['title'] ?>"></a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href="#"><?= $product['title'] ?></a>
                                </div>
                                <div class="card-price text-center">
                                    <?php if ($product['old_price']): ?>
                                        <del><?= $product['old_price'] ?> р.</del>
                                    <?php endif; ?>
                                    <?= $product['price'] ?> р.
                                </div>
                                <a href="?cart=add&id=<?= $product['id'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>

                            </div>
                        </div><!-- /product-card -->
                    <?php endforeach; ?>
                <?php endif; ?>

            </div><!-- /product-cards -->

        </div><!-- /row -->

        

    </div><!-- /container -->
</div><!-- /wrapper -->

<!-- Modal -->
<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-cart-content">

            </div>

        </div>
    </div>
</div>

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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>
