<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");

$idPersona = "";
$nombre = "";
$apellidoP = "";
$apellidoM = "";
$telefono = "";
$correo = "";
$password = "1234";
$activo = 0;
$puesto = "";

if (isset($_POST['submit'])) {
    $idPersona = $_POST['idPersona'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $activo = isset($_POST['activo']) ? 1 : 0;
    $puesto = $_POST['puesto'];

    if ($_POST['submit'] === "Buscar") {
        $query = "SELECT * FROM persona WHERE idPersona='$idPersona'";
        $resultado = mysqli_query($conexion, $query);

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $nombre = $row['nombre'];
            $apellidoP = $row['apellidoP'];
            $apellidoM = $row['apellidoM'];
            $telefono = $row['telefono'];
            $correo = $row['correo'];
            $password = $row['password'];
            $activo = $row['activo'];
            $puesto = $row['puesto'];
        } else {
            echo "No se encontró ninguna persona con ese ID";
        }
        
    } else if ($_POST['submit'] === "Actualizar") {

        $query = "UPDATE persona SET nombre='$nombre', apellidoP='$apellidoP', apellidoM='$apellidoM', telefono='$telefono', correo='$correo', password='$password', activo='$activo', puesto='$puesto' WHERE idPersona='$idPersona'";

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

                <h1>Modifica Persona</h1>
                <br><br>


                <form action="" method="POST">
                    <Div class="container">

                    <div class="row">
                            <div class="col-10">
                                <h2 class="title-black">Datos generales</h2>
                            </div>
                            <br>
                            <div class="col-2">
                                <h6>* Campos obligatorios</h6>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                            <h5>Id empleado*</h5>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col">
                            <input type="text" name="idPersona" required pattern="[0-9]+" value="<?php echo $idPersona; ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                            <div class="col">
                            <input type="submit" name="submit" value="Buscar" class="btn btn-secondary">
                            </div>
                            <div class="col">
                            </div>
                        </div>

                        
                        
                        <div class="row">                          
                            
                            <div class="col">
                                <h5>Nombre*</h5>
                            </div>
                            <div class="col">
                                <h5>Primer Apellido*</h5>
                            </div>
                            <div class="col">
                                <h5>Segundo Apellido</h5>
                            </div>
                        </div>


                        <div class="row">
                            
                            <div class="col">
                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '')">
                            </div>
                            <div class="col">
                            <input type="text" name="apellidoP" value="<?php echo $apellidoP; ?>" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '')">
                            </div>
                            <div class="col">
                            <input type="text" name="apellidoM" value="<?php echo $apellidoM; ?>" oninput="this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '')">
                            </div>
                        </div>


                        <br>
                        <br>

                        <div class="row">
                            
                            <div class="col">
                                <h5>Telefono*</h5>
                            </div>
                            <div class="col">
                                <h5>Correo electronico*</h5>
                            </div>
                            <div class="col">
                                <h5>Contraseña*</h5>
                            </div>
                        </div>


                        <div class="row">
                           
                            <div class="col">
                            <input type="text" name="telefono" pattern="\d{10}" title="Ingrese un número de teléfono válido de 10 dígitos" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="<?php echo $telefono; ?>">
                            </div>
                            <div class="col">
                            <input type="email" name="correo"  
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Por favor, ingresa una dirección de correo electrónico válida" value="<?php echo $correo; ?>">
                            </div>
                            <div class="col">
                            <input type="password" name="password" value="<?php echo $password; ?>">
                            </div>

                        </div>

                        <br>
                        <br>
                        <div class="row">
                        <div class="col">
                                <h5>Puesto*</h5>
                            </div>
                            <div class="col">
                                <h5>Estatus*</h5>
                            </div>
                            
                            <div class="col">
                                
                            </div>

                        </div>

                        
                        <div class="row">
                            
                            
                            <div class="col">
                            <select name="puesto" id="activo">
                            <option value="empleado" <?php echo $puesto === 'empleado' ? 'selected' : ''; ?>>Empleado
                            </option>
                            <option value="gerente" <?php echo $puesto === 'gerente' ? 'selected' : ''; ?>>Gerente
                            </option>
                        </select>
                            </div>
                            <div class="col">
                            <input type="checkbox" name="activo" value="1" <?php echo $activo ? 'checked' : ''; ?>>
                            </div>
                            <div class="col">                             
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-10"></div>
                            <div class="col">
                            <input type="submit" name="submit" value="Actualizar"class="btn btn-secondary" >
                            </div>
                        </div>



                        

                       
                        
                    </Div>
                </form>
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