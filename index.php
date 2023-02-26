<?php include('./template/general/header.php')?>
<main class="bg-white">
    <!--Carousel-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
            <img src="./assets/img/carousel3.jpg"  class="d-block w-100" alt="Servicios">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
            <img src="./assets/img/carousel2.jpg" class="d-block w-100" alt="Tecnologia">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
            <img src="./assets/img/carousel4.jpg" class="d-block w-100" alt="Cursos">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
            <img src="./assets/img/carousel1.png" class="d-block w-100" alt="Promociones">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--VENTAJAS-->
    <div class="w-100">
        <div class="container mx-auto p-5">
            <div class="row row-cols-2 row-cols-md-4 w-100 mx-auto">
                <div class="col w-res">
                    <div class="container mx-auto h-100 p-2 text-center">
                        <span class="icon icon-lg-size">
                            <i class="fas fa-percent"></i>
                        </span>
                        <p class="text-res">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </p>
                        <a href="<?= uriLogin ?>" class="text-link">Seguir Leyendo</a>
                    </div>
                </div>
                <div class="col w-res">
                    <div class="container mx-auto p-2 text-center">
                        <span class="icon icon-lg-size">
                            <i class="fas fa-wallet"></i>
                        </span>
                        <p class="text-res">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="<?= uriLogin ?>" class="text-link">Seguir Leyendo</a>
                    </div>
                </div>
                <div class="col w-res">
                    <div class="container mx-auto h-100 p-2 text-center">
                        <span class="icon icon-lg-size">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                        <p class="text-res">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <a href="<?= uriLogin ?>" class="text-link">Seguir Leyendo</a>
                    </div>
                </div>
                <div class="col w-res">
                    <div class="container mx-auto p-2 text-center">
                        <span class="icon icon-lg-size">
                        <i class="fas fa-user-check"></i>
                        </span>
                        <p class="text-res">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </p>
                        <a href="<?= uriLogin ?>" class="text-link">Seguir Leyendo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--NOVEDADES-->
    <div class="w-100">
        <div class="container mx-auto px-2 py-5 p-md-5">
            <div class="w-100">
                <h1 class="font-teal text-center fs-3">Novedades del Mes:</h1>
            </div>
            <div class="w-100">
                <ul class="d-flex justify-content-around justify-content-md-center align-items-center p-0 flex-wrap ">
                    <li class="nav__item"><a href="<?= uriLogin ?>" class="nav__link nav__link--active ul-txt-res">Servicios Destacados</a></li>
                    <li class="nav__item"><a href="<?= uriLogin ?>" class="nav__link ul-txt-res">Tecnologia</a></li>
                    <li class="nav__item"><a href="<?= uriLogin ?>" class="nav__link ul-txt-res">Cursos</a></li>
                    <li class="nav__item"><a href="<?= uriLogin ?>" class="nav__link ul-txt-res">Electrodomesticos</a></li>
                </ul>
            </div>
            <div class="w-100">
                <div class="row p-0 m-0 justify-content-end flex-wrap">
                    <div class="col-12 col-md-5 p-0 pe-md-2">
                        <img src="./assets/img/promo1.png" alt="Curso" class="h-100 rounded-5 col-12 bg-teal">
                    </div>
                    <div class="col-12 col-md-7 p-0 pt-3 pt-sm-5 p-md-0 ps-md-2">
                        <img src="./assets/img/promo2.png" alt="Tecnologia" class="bg-black bg-opacity-75 h-50 ms-4 ms-sm-3 m-md-0 ms-lg-3 mb-2 rounded-5 col-5">
                        <img src="./assets/img/promo3.png" alt="" class="bg-black bg-opacity-75 h-50 ms-sm-5 ms-md-3 mb-2 mb-md-1 rounded-5 col-5">
                        <img src="./assets/img/promo4-r.png" alt="" class="bg-black bg-opacity-75 h-50 ms-4 ms-sm-3 m-md-0 ms-lg-3 rounded-5 col-5">
                        <img src="./assets/img/promo5.png" alt="" class="bg-black bg-opacity-75 h-50 ms-sm-5 ms-md-3 rounded-5 col-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--DISPONIBILIDAD AL CLIENTE-->
    <div class="w-100">
        <div class="container mx-auto p-5">
            <div class="row p-0 m-0">
                <div class="container mx-auto p-5 bg-disponibilidad rounded-2">
                    <div class="row p-0 m-0 text-center text-light">
                        <h2 class="font-teal fs-3">Innovacion en Movimiento.</h2>
                        <p class="text-res">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorum illo quos explicabo omnis incidunt aut voluptatibus minima consequatur ipsa.</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary mt-3">Contactanos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACTANOS-->
    <div class="w-100">
        <div class="container mx-auto p-5">
            <div class="row p-3 m-0 border border-primary rounded-3 border-opacity-10">
                <h3 class="text-center font-teal">Contactanos</h3>
                <form action="" >
                    <div class="mt-2 mb-3">
                        <label for="" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" placeholder="Erick Penado">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Correo:</label>
                        <input type="email" class="form-control" placeholder="erick@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Asunto:</label>
                        <input type="text" class="form-control" placeholder="Consultas Cursos">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('./template/general/footer.php')?>