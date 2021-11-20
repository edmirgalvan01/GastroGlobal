<?php

$informacion = $_POST['info'];
foreach ($informacion as $i) {
    echo $i;
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./restaurant.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <h1>G</h1>
            <h1>G</h1>
        </div>
        <input type="text" class="header__search" placeholder="Busca tu lugar preferido...">
        <img src="../img/img-perfil.jpg" alt="" class="header__img-user">
    </header>
    <main class="main">
        <section class="container">
            <div class="titles">
                <h1 class="title" id="nombre"></h1>
                <p class='speciality' id="especialidad"></p>
            </div>
            <section class="info">
                <div class="info__picture">
                    <img id="foto_restaurant" src="" alt="">
                </div>
                <div class="info__description">
                    <div class="info__items">
                        <div class="info__item">
                            <h1 class="info__item--title">Nombre</h1>
                            <p class="info__item--text" id="nombre_informacion"></p>
                        </div>
                        <div class="info__item">
                            <h1 class="info__item--title">Especialidad</h1>
                            <p class="info__item--text" id="especialidad_informacion"></p>
                        </div>
                        <div class="info__item">
                            <h1 class="info__item--title">Descripcion</h1>
                            <p class="info__item--text" id="descripcion_informacion"></p>
                        </div>
                        <div class="info__item">
                            <h1 class="info__item--title">Direccion</h1>
                            <p class="info__item--text" id="direccion_informacion"></p>
                        </div>
                        <div class="info__item">
                            <h1 class="info__item--title">Horario</h1>
                            <p class="info__item--text" id="horario_informacion"></p>
                        </div>
                        <div class="info__item">
                            <h1 class="info__item--title">Numero de telefono</h1>
                            <p class="info__item--text" id="numeroTelefono_informacion"></p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <!-- <footer>
        <a href="#" class="logo">
            <h1>G</h1>
            <h1>G</h1>
        </a>
        <p>Muchass gracias por ocupar nuestra aplicacion</p>
        <p>Hecha por: Julio Cesar Ramos Franco y Edmir Galvan Vazquez</p>
        <a href="#">Inicio</a>
    </footer> -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src='../js/pagina_restaurant.js'></script>
</body>

</html>