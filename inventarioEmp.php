<?php
$servidor = "localhost";
$usuario = "root";
$passwordDB = "1234"; // Change this to your actual database password
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $passwordDB, $db) or die("Error al conectar a la base de datos");

$idPersona = "";
$nombre = "";
$apellidoP = "";
$apellidoM = "";
$telefono = "";
$correo = "";
$userPassword = ""; // Changed the variable name to avoid conflict
$activo = 0;
$puesto = "";

if (isset($_POST['submit'])) {
    $idPersona = $_POST['idPersona'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $userPassword = $_POST['password']; // Changed the variable name
    $activo = isset($_POST['activo']) ? 1 : 0;
    $puesto = $_POST['puesto'];

    if ($_POST['submit'] === "Buscar") {
        $query = "SELECT * FROM persona WHERE idPersona='$idPersona' AND puesto = 'Empleado'";
        $resultado = mysqli_query($conexion, $query);

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $nombre = $row['nombre'];
            $apellidoP = $row['apellidoP'];
            $apellidoM = $row['apellidoM'];
            $telefono = $row['telefono'];
            $correo = $row['correo'];
            $userPassword = $row['password']; // Changed the variable name
            $activo = $row['activo'];
            $puesto = $row['puesto'];
        } else {
            echo "No se encontró ninguna persona con ese ID";
        }
        
    } else if ($_POST['submit'] === "Actualizar") {

        $query = "UPDATE persona SET nombre='$nombre', apellidoP='$apellidoP', apellidoM='$apellidoM', telefono='$telefono', correo='$correo', password='$userPassword', activo='$activo', puesto='$puesto' WHERE idPersona='$idPersona'";

        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "Modificacion registrada correctamente";
        } else {
            echo "Error al Modificar el empleado: " . mysqli_error($conexion);
        }
    } else {
        echo "Acción no válida";
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

</head>

<body>

    <!-- Contenido -->
    <div class="container-fluid w-100" id="Contenido">
        <div class="row">
            <!-- Lista -->
            <div class="col-sm-12 col-lg-2 col-md-auto  p-0" id="columna">
                <nav class="nav">
                    <ul class="list">

                        <li class="list__item">
                            <div class="list__button">
                                <img src="assets/dashboard.svg" class="list__img">
                                <a href="index.php" class="nav__link">Punto de Venta</a>
                            </div>
                        </li>

                        <li class="list__item">
                            <div class="list__button">
                                <img src="assets/dashboard.svg" class="list__img">
                                <a href="#" class="nav__link">Historial de venta</a>
                            </div>
                        </li>

                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <img src="assets/docs.svg" class="list__img">
                                <a href="#" class="nav__link">Producto</a>
                                <img src="assets/arrow.svg" class="list__arrow">
                            </div>

                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="AltaProducto.php" class="nav__link nav__link--inside">Registrar</a>
                                </li>

                                <li class="list__inside">
                                    <a href="MProducto.php" class="nav__link nav__link--inside">Modificar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="EProducto.php" class="nav__link nav__link--inside">Eliminar</a>
                                </li>
                            </ul>

                        </li>

                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <img src="assets/bell.svg" class="list__img">
                                <a href="#" class="nav__link">Proveedores</a>
                                <img src="assets/arrow.svg" class="list__arrow">
                            </div>

                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="AltaProveedor.php" class="nav__link nav__link--inside">Registrar</a>
                                </li>

                                <li class="list__inside">
                                    <a href="MProveedor.php" class="nav__link nav__link--inside">Modificar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="Eproveedor.php" class="nav__link nav__link--inside">Eliminar</a>
                                </li>
                            </ul>

                        </li>

                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <img src="assets/bell.svg" class="list__img">
                                <a href="#" class="nav__link">Empleados</a>
                                <img src="assets/arrow.svg" class="list__arrow">
                            </div>

                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="AltaPersona.php" class="nav__link nav__link--inside">Registrar</a>
                                </li>

                                <li class="list__inside">
                                    <a href="MPersona.php" class="nav__link nav__link--inside">Modificar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="EPersona.php" class="nav__link nav__link--inside">Eliminar</a>
                                </li>
                            </ul>

                        </li>

                        <li class="list__item">
                            <div class="list__button">
                                <img src="assets/message.svg" class="list__img">
                                <a href="login.php" class="nav__link">Salir</a>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="col-sm-12 col-lg-10 col-md-auto columna">
                <?php
                include("conexion.php");
                $sql = "SELECT * FROM persona WHERE puesto = 'Empleado'";
                $resultado = mysqli_query($conexion, $sql);
                ?>

                <div class="container-fluid w-100" id="Contenido">
                    <h1>Lista de empleados</h1>
                    <div class="container-fluid w-100" id="Contenido">
                        <div style="height: 720px; overflow-y: scroll;">
                            <table>
                                <!-- encabezado de la tabla -->
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Activo</th>
                                        <th>Puesto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($filas = mysqli_fetch_assoc($resultado)) {
                                        ?>
                                        <!-- contenido de la tabla -->
                                        <tr>
                                            <td><?php echo $filas['idPersona'] ?></td>
                                            <td><?php echo $filas['nombre'] ?></td>
                                            <td><?php echo $filas['apellidoP'] ?></td>
                                            <td><?php echo $filas['apellidoM'] ?></td>
                                            <td><?php echo $filas['telefono'] ?></td>
                                            <td><?php echo $filas['correo'] ?></td>
                                            <td><?php echo $filas['activo'] == 1 ? 'Sí' : 'No' ?></td>
                                            <td><?php echo $filas['puesto'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="main.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

</body>

</html>
