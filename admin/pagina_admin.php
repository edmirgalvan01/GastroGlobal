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
        <a href="#" class="logo">
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
            <form class="formulario">
                <div class="form-item">
                    <label for="curp">CURP</label>
                    <input class="input" type="number" id="curp" name="curp">
                </div>
                <div class="form-item">
                    <label for="numero_telefono">Numero de telefono</label>
                    <input class="input" type="number" id="numero_telefono" name="numero_telefono">
                </div>
                <div class="form-item">
                    <label for="email_propietario">Correo electronico</label>
                    <input class="input" type="email" id="email_propietario" name="email_propietario">
                </div>
                <div class="form-item">
                    <label for="contreseña">Contraseña</label>
                    <input class="input" type="password" id="contreseña" name="contreseña">
                </div>

                <button type="submit" id="guardar_propietario">Guardar</button>
            </form>

            <h1>Informacion del restaurant</h1>
            <form class="formulario">
                <div class="form-item">
                    <label for="email_restaurant">Correo electronico</label>
                    <input class="input" type="email" id="email_restaurant" name="email_restaurant">
                </div>
                <div class="form-item">
                    <label for="dias_laburo">Dias que laboran</label>
                    <input class="input" type="text" id="dias_laburo" name="dias_laburo"
                        placeholder="Ej: Lunes a viernes">
                </div>
                <div class="form-item">
                    <label for="horario_entrada">Horario de entrada</label>
                    <input class="input" type="time" id="horario_entrada" name="horario_entrada">
                </div>
                <div class="form-item">
                    <label for="horario_salida">Horario de salida</label>
                    <input class="input" type="time" id="horario_salida" name="horario_salida">
                </div>
                <div class="form-item">
                    <label for="servicios">Servicios con los que cuentan</label>
                    <select name="servicios" id="servicios">
                        <!-- TODO: Insertar mediante PHP -->
                    </select>
                </div>
                <div class="form-item">
                    <label for="telefono_contacto_restaurant">Telefono de contacto</label>
                    <input class="input" type="number" id="telefono_contacto_restaurant"
                        name="telefono_contacto_restaurant">
                </div>

                <div class="form-item">
                    <label for="especialidad">Especialidad del restaurant</label>
                    <input class="input" type="text" id="especialidad" name="especialidad">
                </div>
                <div class="form-item">
                    <label for="descripcion">Descripcion del restaurant</label>
                    <input class="input" type="text" id="descripcion" name="descripcion">
                </div>
                <div class="form-item">
                    <label for="fotos">Fotos del restaurant</label>
                    <input type="file" id="fotos" name="fotos">
                </div>

                <button type="submit" id="guardar_restaurant">Guardar</button>
            </form>
        </div>
    </main>
</body>

</html>