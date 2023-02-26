<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="/c022021/assets/tools/css/bootstrap.min.css">
    <link rel="stylesheet" href="/c022021/assets/tools/css/styles.css">
    <link rel="stylesheet" href="/c022021/template/general/header.css">
    <!--ICONS-->
    <script src="https://kit.fontawesome.com/be9e926d45.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./assets/img/logo_size.png">
    <!--SWIPE-->
    <link href="
    https://cdn.jsdelivr.net/npm/swiper@9.0/swiper-bundle.min.css
    " rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.0/swiper-bundle.min.js"></script>
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&display=swap" rel="stylesheet">
    <title>InnoTech</title>
</head>
<body>
    <div class="container__nav">
        <div class="container__navW">
            <div class="navigate">
                <!-- Derecha nombre-->
                <div class="ct__img">
                    <img src="/c022021/assets/img/logo_size.png" alt="InnoTech" class="img-fit">
                </div>

                <div id="btn-hamburguer" class="menu">
                    <span class="icon icon__hamburguer">
                        <i class="fas fa-bars"></i>
                    </span>
                </div>

                <div id="back__menu" class=""></div>
                <nav 
                id="nav" 
                class="nav-res nav-wh"
                >
                    <div id="btn-close" class="close">
                        <span class="icon icon__close">
                        <i class="fas fa-times"></i>
                        </span>
                    </div>
                    <!--Izquierda menu-->
                    <ul class="nav__links">

                        <li class="nav__item">
                            <a href="<?= uriInicio ?>" class="nav__link nav__link--active">Inicio</a>
                        </li>

                        <li class="nav__item">
                            <a href="<?= uriLogin ?>" class="nav__link">Ingresar</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?= uriRegistrar ?>" class="nav__link">Registrarse</a>
                        </li>
                    </ul>
            </nav>
            </div>
        </div>
    </div>