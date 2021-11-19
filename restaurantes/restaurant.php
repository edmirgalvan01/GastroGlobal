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
            <div class="titulos">
                <h1 class="titulo" id="nombre"></h1>
                <p class='especialidad' id="especialidad"></p>
            </div>
            <section class="content__info">
                <div class="foto__restaurant">
                    <img id="foto_restaurant" src="" alt="">
                </div>
                <div class="informacion">
                    <div class="informacion__items">
                        <div class="informacion__item">
                            <p>Nombre</p>
                            <p id="nombre_informacion"></p>
                        </div>
                        <div class="informacion__item">
                            <p>Especialidad</p>
                            <p id="especialidad_informacion"></p>
                        </div>
                        <div class="informacion__item">
                            <p>Descripcion</p>
                            <p id="descripcion_informacion"></p>
                        </div>
                        <div class="informacion__item">
                            <p>Direccion</p>
                            <p id="direccion_informacion"></p>
                        </div>
                        <div class="informacion__item">
                            <p>Horario</p>
                            <p id="horario_informacion"></p>
                        </div>
                        <div class="informacion__item">
                            <p>Numero de telefono</p>
                            <p id="numeroTelefono_informacion"></p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <footer>
        <a href="#" class="logo">
            <h1>G</h1>
            <h1>G</h1>
        </a>
        <p>Muchass gracias por ocupar nuestra aplicacion</p>
        <p>Hecha por: Julio Cesar Ramos Franco y Edmir Galvan Vazquez</p>
        <a href="#">Inicio</a>
    </footer>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src='../js/pagina_restaurant.js'></script>
</body>

</html>