<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");
$codigo = "";
$proveedor = "";
$idMarca = "";
$modelo = "";
$nombre_producto = "";
$descripcion = "";
$precio_unitario = "";
$stock = "";
$precio_compra = "";
$Categoria = "";

if (isset($_POST['submit'])) {
    $codigo = $_POST['codigo'];
    $proveedor = $_POST['proveedor'];
    $idMarca = $_POST['idMarca'];
    $modelo = $_POST['modelo'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $precio_unitario = $_POST['precio_unitario'];
    $stock = $_POST['stock'];
    $precio_compra = $_POST['precio_compra'];
    $Categoria = $_POST['Categoria'];

    if ($_POST['submit'] === "Buscar") {
        $query = "SELECT * FROM producto WHERE codigo='$codigo'";
        $resultado = mysqli_query($conexion, $query);

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $codigo = $row['codigo'];
            $proveedor = $row['proveedor'];
            $idMarca = $row['idMarca'];
            $modelo = $row['modelo'];
            $nombre_producto = $row['nombre_producto'];
            $descripcion = $row['descripcion'];
            $precio_unitario = $row['precio_unitario'];
            $stock = $row['stock'];
            $precio_compra = $row['precio_compra'];
            $Categoria = $row['Categoria'];
        } else {
            echo "No se encontró ningun producto con ese codigo";
        }
    } else if ($_POST['submit'] === "Actualizar") {
        $query = "UPDATE producto SET proveedor='$proveedor', idMarca='$idMarca', modelo='$modelo', nombre_producto='$nombre_producto', descripcion='$descripcion', precio_unitario='$precio_unitario', stock='$stock', precio_compra='$precio_compra', Categoria='$Categoria' WHERE codigo='$codigo'";

        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "Se actualizo con exito el producto";
        } else {
            echo "Error al Actualizar el producto: " . mysqli_error($conexion);
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

                <h1>Modificar Producto</h1>
                <br> <br>

                <form action="" method="POST">
                    <div class="container"><br>

                        <div class="row">
                            <div class="col">
                                <label for="codigo">Código:</label>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" name="codigo" required value="<?php echo $codigo; ?>">
                            </div>
                            <div class="col">
                                <input type="submit" name="submit" value="Buscar">
                            </div>
                            <div class="col">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="proveedor">Proveedor:</label>
                            </div>
                            <div class="col">
                                <label for="idMarca">ID de Marca:</label>
                            </div>
                            <div class="col">
                                <label for="modelo">Modelo:</label>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <input type="text" name="proveedor" value="<?php echo $proveedor; ?>">
                            </div>
                            <div class="col">
                                <input type="text" name="idMarca" value="<?php echo $idMarca; ?>">
                            </div>
                            <div class="col">
                                <input type="text" name="modelo" value="<?php echo $modelo; ?>">
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col">
                                <label for="nombre_producto">Nombre del Producto:</label>
                            </div>
                            <div class="col">
                                <label for="descripcion">Descripción:</label>
                            </div>
                            <div class="col">
                                <label for="precio_unitario">Precio Unitario:</label>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <input type="text" name="nombre_producto" value="<?php echo $nombre_producto; ?>">
                            </div>
                            <div class="col">
                                <input type="text" name="descripcion"  value="<?php echo $descripcion; ?>">
                            </div>
                            <div class="col">
                                <input type="number" step="0.01" name="precio_unitario" value="<?php echo $precio_unitario; ?>">
                            </div>
                        </div>
                        <br><br>

                        <div class="row">

                            <div class="col">
                                <label for="stock">Stock:</label>
                            </div>
                            <div class="col">
                                <label for="precio_compra">Precio de Compra:</label>
                            </div>
                            <div class="col">
                                <h5>Categoria</h5>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <input type="number" name="stock" value="<?php echo $stock; ?>">
                            </div>
                            <div class="col">
                                <input type="number" step="0.01" name="precio_compra" value="<?php echo $precio_compra; ?>">
                            </div>
                            <div class="col">
                                <select name="Categoria">
                                    <option value="lacteos" <?php echo $Categoria === 'lacteos' ? 'selected' : ''; ?>>
                                        Lacteos
                                    </option>
                                    <option value="cuidadoP" <?php echo $Categoria === 'cuidadoP' ? 'selected' : ''; ?>>
                                        Cuidado y aseo personal
                                    </option>
                                    <option value="abarrotes" <?php echo $Categoria === 'abarrotes' ? 'selected' : ''; ?>> Abarrotes
                                    </option>
                                    <option value="bebidasL" <?php echo $Categoria === 'bebidasL' ? 'selected' : ''; ?>>
                                        Bebidas y licores
                                    </option>
                                    <option value="limpiezaH" <?php echo $Categoria === 'limpiezaH' ? 'selected' : ''; ?>>Limpieza para el
                                        hogar
                                    </option>
                                    <option value="farmacia" <?php echo $Categoria === 'farmacia' ? 'selected' : ''; ?>>
                                        Farmacia
                                    </option>
                                </select>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                            <div class="col">
                                <input type="submit" name="submit" value="Actualizar">
                            </div>
                        </div>




                    </div>
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