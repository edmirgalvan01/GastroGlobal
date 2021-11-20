<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <h1>G</h1>
            <h1>G</h1>
        </div>
        <div class="header__search">
            <input type="text" id="input__search" class="header__search--input" placeholder="Busca tu lugar preferido...">
            <div class="search__results--default" id="search__results">
                <!-- TODO: Agregar mediante script -->
                <!-- ACTIVAR MEDIANTE JS -->
            </div>
        </div>
        <img src="./img/img-perfil.jpg" alt="" class="header__img-user">
    </header>
    <div class="first-img">
        <h1 class="first-img__title">¿No sabes donde comer? ¡Nosotros te ayudamos!</h1>
    </div>
    <main class="layout">
        <section class="home__restaurantes">
            <h1 class="home__title">Descubre nuevos restaurantes</h1>
            <section class="list__restaurantes" id="lista_restaurantes">
                <!-- INSERTAR CON PHP -->
            </section>
            <h1 class="home__title">Los restaurantes mas votados</h1>
            <section class="list__restaurantes">
                <!-- INSERTAR CON PHP -->
            </section>
        </section>
        <section class="owner">
            <div class="owner__information">
                <h1>Animate a ser propietario de <br> tu restaurant</h1>
                <a href="#">Mas informacion</a>
            </div>
            <img class="owner__img" src="./img/owner.jpg" alt="">
        </section>
    </main>
    <footer>
        <div class="logo">
            <h1>G</h1>
            <h1>G</h1>
        </div>
        <nav class="footer__navbar">
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Preguntas frecuentes</a>
            <a href="#">Restaurantes</a>
        </nav>
        <nav class="footer__social-media">
            <a href="#"><img class="social-media__item" src="./img/i-facebook.png" alt=""></a>
            <a href="#"><img class="social-media__item" src="./img/i-instagram.png" alt=""></a>
            <a href="#"><img class="social-media__item" src="./img/i-twitter.png" alt=""></a>
        </nav>
    </footer>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/mostrar_restaurant.js"></script>
    <script src="./js/busqueda_rest.js"></script>
    <script src="./js/barra-busqueda.js"></script>
</body>

</html>