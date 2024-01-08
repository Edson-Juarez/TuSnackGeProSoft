<?php
// Conexión a la base de datos

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "productos";

$conn = mysqli_connect($servername, $username, $password, $dbname);


// Verificar si se ha enviado el formulario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $apellidoM = $_POST['apellidoM'];
    $contraseña = $_POST['contraseña'];
    //`idcliente`, `nombre`, 
    // Consulta para obtener los datos del usuario
    $sql = "SELECT * FROM `cliente` WHERE `apellidoM` = '$apellidoM' AND `contraseña` = '$contraseña'";
    $resultad = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultad) == 1) {
        // Iniciar sesión y redirigir a la página de inicio
        session_start();
        $_SESSION['apellidoM'] = $apellidoM;
        header('Location: index.php');
    } else {
        // Mostrar mensaje de error
        echo "Sus credenciales son incorrectas.";
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>



<!DOCTYPE html>
<html>

<head>
    <title> Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            background-color: #f2f2f2;
        }

        h1 {

            text-align: center;
            margin-top: 70px;
            background-color: white;
        }

        form {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            color: #555;
            font-family: 'Open Sans', sans-serif;
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

        input[type="submit"]:hover {
            background-color: #2E8B57;

        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }

        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <h1>Inicio de Sesión</h1>
    <br><br>
    <form action="loginC.php" method="post">
        <img width="100px" height="100px" src="/img/user.png" alt="avatar">
        <br><br>
        <label for="idPersona">Nombre de Usuario:</label>
        <input type="text" name="apellidoM" id="apellidoM" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required>


        <div class="col">
            <input type="submit" value="Iniciar Sesión">

        </div>
        <br>
        <div class="col">
            <a href="AltaCliente.php">Registrate</a>
            <a href="index.php">Volver al Inicio</a>
        </div>

    </form>
    <script>
        function redirigirRegistro() {
            // Redirigir a la vista de registro (reemplaza "vista-registro.html" con la URL de la vista de registro)
            window.location.href = "AltaCliente.html";
        }
    </script>
</body>

</html>