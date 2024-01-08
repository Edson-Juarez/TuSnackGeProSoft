<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");
$idcliente = "";
$nombre = "";
$apellidoP = "";
$apellidoM = "";
$telefono = "";
$correo = "";
$contraseña = "";
$direccion = "";


if ($conexion) {
    echo "";
} else {
    echo "mal";
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $direccion = $_POST['direccion'];

    $query = "INSERT INTO `cliente` (`idcliente`, `nombre`, `apellidoP`, `apellidoM`, `telefono`, `correo`, `contraseña`, `direccion`) 
    VALUES  (null, '$nombre', '$apellidoP', '$apellidoM', '$telefono', '$correo', '$contraseña', '$direccion')";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        echo "Se Registro correctamente ";
    } else {
        echo "";
    }
}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <meta name=”keywords” content=”HTML5, CSS3, Javascript”>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <link rel="stylesheet" type="text/css" href="styl.css">

    <title>Punto de venta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        form {
            background-color: white;
            border-radius: 20px;
            border: #00b585;
            color: black;
            padding: 10px;
            margin: 0 auto;
            width: 600px;
        }

        body {
            font-family: Arial;
            background: #16A085;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F4D03F, #16A085);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F4D03F, #16A085);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            /* Agrega esta línea */
            margin: 0 auto;
        }

        a {
            display: block;
            text-align: center;
        }

        h1 {
            font-family: "Arial Black", sans-serif;
            font-size: 36px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Formulario -->
    <div class="container">


        <br><br>
        <form action="" method="POST">
            <Div class="container">
                <br>
                <h1>Registrate </h1>
                <br><br>



                <div class="row">
                    <div class="col">
                        <h5>Nombre*</h5>
                    </div>
                    <div class="col">
                        <label for="tipoProveedor">Apellidos</label>
                    </div>

                </div>


                <div class="row">


                    <div class="col">
                        <input type="text" name="nombre" id="nombre" maxlength="25" oninput="validarNombre(this)"
                            class="form-control mb-3" required>
                        <span id="error-messagenom" style="color: red;"></span>
                    </div>

                    <div class="col">
                        <input type="text" name="apellidoP" id="apep" maxlength="20" oninput="validarApeP(this)"
                            class="form-control mb-3" required disabled>
                        <span id="error-messageapep" style="color: red;"></span>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="nombre">Nombre de usuario:</label>

                    </div>
                    <div class="col">
                        <label for="telefono">Teléfono:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="text" name="apellidoM" id="apem" maxlength="20" oninput="validarApeM(this)"
                            class="form-control mb-3" disabled>
                        <span id="error-messageapem" style="color: red;"></span>
                    </div>
                    <div class="col">
                        <input type="text" name="telefono" required id="telefono" class="form-control mb-3"
                            oninput="validatePhone()" minlength="10" maxlength="10" disabled>
                        <p id="phone-error" style="display: none; color: red;">Por favor, ingresa un número de
                            teléfono válido.</p>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="correo">Correo:</label>
                        </div>
                        <div class="col">
                            <label for="direccion">Dirección:</label>
                        </div>
                    </div>


                </div>
                <div class="row">

                    <div class="col">
                        <input type="email" name="correo" id="email" oninput="validarEmail()" class="form-control mb-3"
                            required disabled>
                        <span id="error-message" style="color: red;"></span>
                    </div>
                    <div class="col">

                        <input type="text" name="direccion" id="direccion" class="form-control mb-3" maxlength="100"
                            oninput=" validarDireccion(this)" required disabled>
                        <span id="dirE" style="color: red;"></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="telefono">Contraseña:</label>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="password" name="contraseña" id="password" oninput="validarContraseña()"
                            class="form-control mb-3" required disabled>
                        <p id="pas-error" style="display: none; color: red;">Por favor, ingresa una contraseña mayor a 3
                            digitos.</p>
                    </div>
                    <div class="col"> </div>
                </div>


                <div class="row">
                    <input type="submit" name="submit" value="Registrar" id="registrar" disabled>

                </div>
                <div class="row">
                    <a href="loginC.php">Inicia Sesión</a>
                    <a href="index.php">volver a la pagina de inicio</a>
                </div>
            </div>

    </Div>
    </form>
    </div>

    </div>
    <script src="ACliente.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

        </script>

</body>

</html>