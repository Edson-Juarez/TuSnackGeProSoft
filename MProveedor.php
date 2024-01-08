<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");

$idProveedor = "";
$tipoProveedor = "";
$nombre = "";
$telefono = "";
$correo = "";
$direccion = "";

if (isset($_POST['submit'])) {
    $idProveedor = $_POST['idProveedor'];
    $tipoProveedor = $_POST['tipoProveedor'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];

    if ($_POST['submit'] === "Buscar") {
        $query = "SELECT * FROM proveedor WHERE idProveedor='$idProveedor'";
        $resultado = mysqli_query($conexion, $query);

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $idProveedor = $row['idproveedor'];
            $tipoProveedor = $row['tipo proveedor'];
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];
            $correo = $row['correo'];
            $direccion = $row['direccion'];
        } else {
            echo "No se encontró ninguna persona con ese ID";
        }
    } else if ($_POST['submit'] === "Actualizar registro") {

        $query = "UPDATE proveedor SET `tipo proveedor`='$tipoProveedor', nombre='$nombre', telefono='$telefono', correo='$correo', direccion='$direccion' WHERE idproveedor='$idProveedor'";

        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "Registro actualizado correctamente";
        } else {
            echo "Error al actualizar el registro";
        }
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
    <title>Punto de venta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <img src="assets/docs.svg" class="list__img">
                                <a href="#" class="nav__link">Reportes de inventario</a>
                                <img src="assets/arrow.svg" class="list__arrow">
                            </div>

                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="ReporteG.php" class="nav__link nav__link--inside">Reporte General</a>
                                </li>

                                <li class="list__inside">
                                    <a href="ReporteB.php" class="nav__link nav__link--inside">Inventario bajo</a>
                                </li>
                                
                            </ul>

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
                                    <a href="EProducto.php" class="nav__link nav__link--inside">Borrar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="inventarioP.php" class="nav__link nav__link--inside">Ver inventario</a>
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
                                    <a href="Eproveedor.php" class="nav__link nav__link--inside">Borrar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="inventarioPro.php" class="nav__link nav__link--inside">Ver Proovedores</a>
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
                                    <a href="EPersona.php" class="nav__link nav__link--inside">Borrar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="inventarioEmp.php" class="nav__link nav__link--inside">Ver Empleados</a>
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
            <!-- Formulario -->
            <div class="col-sm-12 col-lg-10 col-md-auto columna">



                <h1>Formulario de Proveedor</h1>
                <form action="" method="POST">
                    <Div class="container">
                        <div class="row">
                            <div class="col-10">
                                <h2 class="title-black">Datos generales</h2>
                            </div>+ <div class="col-2">

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <h5>Id de Proveedor*</h5>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" name="idProveedor" maxlength="4" maxlength="4" required  value="<?php echo $idProveedor; ?>">
                                

                            </div>
                            <div class="col">
                                <input type="submit" name="submit" value="Buscar">
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for="tipoProveedor">Tipo de Proveedor:</label>
                            </div>
                            <div class="col">
                                <label for="nombre">Nombre:</label>
                            </div>
                            <div class="col">
                                <label for="telefono">Teléfono:</label>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col">
                                <input type="text" name="tipoProveedor" id="tipoProveedor" maxlength="25"   value="<?php echo $tipoProveedor; ?>" 
                                 oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '')" >
                                <span id="error-messagenom" style="color: red;"></span>
                            </div>
                            <div class="col">
                                <input type="text" name="nombre" id="nombre" maxlength="25" value="<?php echo $nombre; ?>" 
                                oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '')">

                            </div>
                            <div class="col">
                                <input type="text" name="telefono"  id="telefono" minlength="10" maxlength="10" value="<?php echo $telefono; ?>"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')"  >
                                
                            </div>
                        </div>
                        <br><br>
                        <div class="row">

                            <div class="col">
                                <label for="correo">Correo:</label>
                            </div>
                            <div class="col">
                                <label for="direccion">Dirección:</label>
                            </div>
                            <div class="col">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col">
                                <input type="email" name="correo" id="email" value="<?php echo $correo; ?>"
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Por favor, ingresa una dirección de correo electrónico válida">
                              

                            </div>
                            <div class="col">

                                <input type="text" name="direccion" id="direccion" maxlength="100" value="<?php echo $direccion; ?>"
                                oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '')">
                                <span id="dirE" style="color: red;"></span>
                            </div>
                            <div class="col">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col"> </div>
                            <div class="col"> </div>
                            <div class="col">
                                <input type="submit" name="submit" value="Guardar" id="registrar">

                            </div>
                        </div>
                    </Div>
                </form>

            </div>

        </div>
    </div>





    <script src="main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>