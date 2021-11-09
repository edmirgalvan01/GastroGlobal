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
                <h1 class="titulo">Nombre del restaurant</h1>
                <p>315 opiniones realizadas / 3.5 estrellas</p>
            </div>
            <div class="fotos-restaurant">
                <img src="../img/restaurant1.jpg" alt="">
            </div>
            <div class="descripcion-servicios">
                <div class="textos-descripcion">
                    <p class="descripcion-horario">Lunes a Viernes 9:00 - 18:00</p>
                    <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi eaque
                        dolores nesciunt numquam
                        assumenda aspernatur labore perferendis amet tenetur praesentium? Mollitia veniam impedit dolore
                        expedita, modi iusto blanditiis repellendus quia ex, sint ipsam vel in a illum aut excepturi
                        dolor
                        pariatur amet quisquam accusamus suscipit quo. Tempora rerum sunt repellat doloremque aut
                        sapiente
                        fugit, cum nihil tempore suscipit esse beatae velit? Veniam, accusantium dolores? Sunt quaerat
                        in
                        tempora commodi natus tenetur laudantium repudiandae, nulla est corporis amet nihil aut
                        aspernatur
                        iusto quisquam praesentium sapiente iure veniam dolores sequi. Ex libero at ad explicabo culpa
                        maiores nulla vero, eveniet numquam pariatur.</p>
                </div>
                <div class="servicios" id="lista_servicios">
                    <!-- INSERTAR CON PHP -->
                </div>
            </div>
            <div class="opiniones">
                <h1 class="titulo">Opiniones</h1>
                <div class="lista-opiniones" id="lista_opiniones">
                    <!-- INSERTAR CON PHP -->
                    <a href="../pagina-inicio-sesion/inicio-sesion.html" class="crear-opinion">Crear opinion</a>
                </div>
            </div>
            <div class="ubicacion">
                <h1 class="titulo">Ubicacion</h1>
                <div class="mapa-restaurant">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29893.420121382762!2d-97.4450015218262!3d20.51944205250554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85da6a86ae309d99%3A0xd32b621a3b5e5865!2sCBTis%20No.%2078!5e0!3m2!1ses-419!2smx!4v1634140789665!5m2!1ses-419!2smx"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
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
</body>

</html>