<?php
session_start();
$logeado = false;
if (!empty($_SESSION['usuario']['email'])) {
    $logeado = true;
    $nombre = "Bienvenido";
} else {
    $nombre = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Panel de usuario
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop_sesion">
                <?php
                if ($logeado == false) {
                    echo '<li><a class="dropdown-item" id="inicio_sesion" href="#"data-bs-toggle="modal" data-bs-target="#inicio_sesiones">Iniciar Sesion</a></li>
                  <li><a class="dropdown-item"  id="registro" data-bs-toggle="modal" data-bs-target="#registrar_user">Registrarse</a></li>';
                } else
                    echo $nombre . '<li><a class="dropdown-item" id="cerrar_sesion" href="./index.php">Cerrar Sesion</a></li>';
                ?>
            </ul>
        </li>
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
        </section>
        <section class="owner">
            <div class="owner__information">
                <h1>Animate a ser propietario de <br> tu restaurant</h1>
                <a href="./admin/pagina_admin.php">Registrate</a>
            </div>
            <img class="owner__img" src="./img/owner.jpg" alt="">
        </section>
    </main>
    <footer>
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
    <script src="./js/registrar_usuario.js"></script>
    <script src="./js/iniciar_sesion.js"></script>
    <script src="./js/cerrar_sesion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>

<?php
require_once('./modal/modal_registro.php');
?>