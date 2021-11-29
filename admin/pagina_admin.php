<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos-admin.css">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="../index.php" class="logo">
            <h1>G</h1>
            <h1>G</h1>
        </a>
        <input class="barra-busqueda" placeholder="Busca tu lugar preferido" />
        <!-- TODO: Agregar icono de busqueda para dispositivos moviles -->
        <a href="" class="img-perfil">
            <img src="../img/img-perfil.jpg" alt="">
        </a>
    </header>
    <main>
        <div class="container">
            <h1>Informacion personal</h1>
            <form action="./scripts/insertar_propietario.php" method="post" enctype="multipart/form-data" class="formulario">
                <div class="form-item">
                    <label for="nombre_propietario">Nombre completo</label>
                    <input class="input" type="text" id="nombre_propietario" name="nombre_propietario" required>
                </div>
                <div class="form-item">
                    <label for="email_propietario">Correo electronico</label>
                    <input class="input" type="email" id="email_propietario" name="email_propietario" required>
                </div>
                <div class="form-item">
                    <label for="contreseña">Contraseña</label>
                    <input class="input" type="password" id="contreseña" name="contraseña" required>
                </div>

                <button class="boton" type="submit" id="guardar_propietario">Guardar</button>
            </form>

            <h1>Informacion del restaurant</h1>
            <form action="./scripts/insertar_restaurant.php" method="post" enctype="multipart/form-data" class="formulario">
                <div class="form-item">
                    <label for="nombre_restaurant">Nombre</label>
                    <input class="input" type="text" id="nombre_restaurant" name="nombre_restaurant" required>
                </div>
                <div class="form-item">
                    <label for="email_restaurant">Correo electronico</label>
                    <input class="input" type="email" id="email_restaurant" name="email_restaurant" required>
                </div>
                <div class="form-item">
                    <label for="dias_laburo">Dias que laboran</label>
                    <input class="input" type="text" id="dias_laburo" name="dias_laburo" placeholder="Ej: Lunes a viernes" required>
                </div>
                <div class="form-item">
                    <label for="horario_entrada">Horario de entrada</label>
                    <input class="input" type="text" id="horario_entrada" name="horario_entrada" placeholder="Ej: 8:00" required>
                </div>
                <div class="form-item">
                    <label for="horario_salida">Horario de salida</label>
                    <input class="input" type="text" id="horario_salida" name="horario_salida" placeholder="Ej: 20:00" required>
                </div>
                <div class="form-item">
                    <label for="direccion">Direccion</label>
                    <input class="input" type="text" id="direccion" name="direccion" placeholder="Ej: Calle 12 de octubre #69 colonia Polanco" required>
                </div>
                <div class="form-item">
                    <label for="telefono_contacto_restaurant">Telefono de contacto</label>
                    <input class="input" type="number" id="telefono_contacto_restaurant" name="telefono_contacto_restaurant" required>
                </div>

                <div class="form-item">
                    <label for="especialidad">Especialidad del restaurant</label>
                    <input class="input" type="text" id="especialidad" name="especialidad" required>
                </div>
                <div class="form-item">
                    <label for="descripcion">Descripcion del restaurant</label>
                    <textarea class="input" id="descripcion" name="descripcion" cols="30" rows="5" required></textarea>
                </div>
                <div class="form-item">
                    <label for="fotos">Fotos del restaurant</label>
                    <input type="file" class="input" id="foto" placeholder="foto" name="foto">
                </div>
                <div class="form-item">
                    <label for="propietario_restaurant">Nombre del propietario del restaurant</label>
                    <select name="propietario_restaurant" id="propietario_restaurant" required>
                        <!-- TODO: Insertar mediante PHP -->
                    </select>
                </div>
                <button class="boton" type="submit" id="guardar_restaurant">Guardar</button>
            </form>
        </div>
    </main>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/tipos_restaurant.js"></script>
    <script src="../js/propietario_restaurant.js"></script>
</body>

</html>