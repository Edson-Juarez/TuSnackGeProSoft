<?php
include("conexion.php");

$codigo = $proveedor = $idMarca = $modelo = $nombre_producto = $descripcion = $precio_unitario = $stock = $precio_compra = $Categoria = $unidad_medida = $tipo_producto = "";

if (isset($_POST['submit'])) {
    // Comprueba si 'stock' está establecido y es un valor numérico
    if (isset($_POST['stock']) && is_numeric($_POST['stock'])) {
        // Limpia y valida otros datos de entrada
        $codigo = mysqli_real_escape_string($conexion, $_POST['codigo']);
        $proveedor = mysqli_real_escape_string($conexion, $_POST['proveedor']);
        $idMarca = mysqli_real_escape_string($conexion, $_POST['idMarca']);
        $modelo = mysqli_real_escape_string($conexion, $_POST['modelo']);
        $nombre_producto = mysqli_real_escape_string($conexion, $_POST['nombre_producto']);
        $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
        $precio_unitario = mysqli_real_escape_string($conexion, $_POST['precio_unitario']);
        $stock = (int) $_POST['stock'];  // Convierte 'stock' a entero
        $precio_compra = mysqli_real_escape_string($conexion, $_POST['precio_compra']);
        $Categoria = mysqli_real_escape_string($conexion, $_POST['Categoria']);
        $unidad_medida = mysqli_real_escape_string($conexion, $_POST['unidad_medida']);
        $tipo_producto = 'por definir';  // Asegúrate de que 'tipo_producto' se envía desde el formulario

        // Inserta los datos en la tabla 'producto'
        $query = "INSERT INTO producto (codigo, Img, proveedor, idMarca, modelo, nombre_producto, descripcion, precio_unitario, stock, precio_compra, Categoria, unidad_medida, tipo_producto)
        VALUES (?, '/img/productos/nuevo.jpg', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepara la declaración
        $stmt = mysqli_prepare($conexion, $query);

        // Vincula los parámetros
        mysqli_stmt_bind_param($stmt, "ssssssssdsss", $codigo, $proveedor, $idMarca, $modelo, $nombre_producto, $descripcion, $precio_unitario, $stock, $precio_compra, $Categoria, $unidad_medida, $tipo_producto);

        // Ejecuta la declaración
        $resultado = mysqli_stmt_execute($stmt);

        // Comprueba si la consulta fue exitosa
        if ($resultado) {
            echo "Producto registrado correctamente";
        } else {
            echo "Error al registrar el producto: " . mysqli_error($conexion);
            // Registra información detallada del error (para fines de desarrollo)
            error_log("Error: " . mysqli_error($conexion));
        }

        // Cierra la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: el valor 'stock' no está establecido o no es un número válido";
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
}
?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML5, CSS3, Javascript">
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
                <h1>Registrar Producto</h1>
                <br> <br>
                <form action="" method="POST">
                    <div class="container">

                        <div class="row">
                            <div class="col">
                                <label for="codigo">ID de producto*</label>
                            </div>
                            <div class="col">
                                <label for="nombre_producto">Nombre del Producto*</label>

                            </div>
                            <div class="col">
                                <label for="descripcion">Descripción*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="codigo" id="id" oninput="validateID()" maxlength="13"
                                    maxlength="13" required>
                                <p id="id-error" style="display: none; color: red;">Por favor, ingresa un ID válido.</p>

                            </div>
                            <div class="col">
                                <input type="text" name="nombre_producto" id="nombre" maxlength="25"
                                    oninput="validarNombre(this)" required>
                                <span id="error-messagenom" style="color: red;"></span>
                            </div>
                            <div class="col">
                                <input type="text" name="descripcion" id="descripcion" maxlength="40"
                                    oninput="validarDescripcion(this)" required>
                                <span id="error-messagenom" style="color: red;"></span>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col">
                                <label for="stock">Cantidad en existencia:</label>
                            </div>
                            <div class="col">
                                <label for="proveedor">Proveedor*</label>
                            </div>
                            <div class="col">
                                <label for="idMarca">ID de Marca*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="number" name="stock" required>
                            </div>
                            <div class="col">
                                <?php
                                $servidor = "localhost";
                                $usuario = "root";
                                $password = "1234";
                                $db = "productos";

                                $conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("error");


                                if ($conexion) {
                                    echo "";
                                } else {
                                    echo "mal";
                                }


                                $query = "SELECT nombre FROM proveedor";
                                $result = mysqli_query($conexion, $query);

                                if (mysqli_num_rows($result) > 0) {

                                    echo '<select name="proveedor"   id="proveedor">  ';


                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                    }

                                    echo '</select>';
                                } else {
                                    echo 'No se encontraron proveedores.';
                                }
                                mysqli_close($conexion);
                                ?>
                            </div>

                            <div class="col">
                                <input type="text" name="idMarca" id="idMarca" oninput="validateIDMarca()" maxlength="6"
                                    maxlength="6" required>
                                <p id="idM-error" style="display: none; color: red;">Por favor, ingresa un ID de marca.
                                </p>
                            </div>

                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col">
                                <label for="precio_unitario">Precio Unitario*</label>
                            </div>
                            <div class="col">
                                <label for="modelo">Modelo*</label>

                            </div>
                            <div class="col">
                                <label for="precio_compra">Precio de Compra*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="number" step="0.01" min="1" name="precio_unitario" id="precio_unitario"
                                    oninput="validaPrecioU(this)" required>
                                <span id="error-messagenom" style="color: red;"></span>
                            </div>
                            <div class="col">
                                <input type="text" name="modelo" id="modelo" maxlength="30"
                                    oninput="validarModelo(this)" required>
                                <span id="error-messagemod" style="color: red;"></span>
                            </div>

                            <div class="col">
                                <input type="number" step="0.01" min="0" name="precio_compra" id="precio_compra"
                                    oninput="validaPrecioC(this)" required>
                            </div>
                        </div>
                        <br><br>
                        <!-- Add this block inside the form, after the stock input -->
                        <div class="row">
                            <div class="col">
                                <label for="unidad_medida">Unidad de Medida*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <select name="unidad_medida" id="unidad_medida" required>
                                    <option value="unidad" selected>Unidad</option>
                                    <option value="kg">Kilogramo</option>
                                    <option value="g">Gramo</option>
                                    <option value="l">Litro</option>
                                    <option value="c">Caja</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <br><br>



                        <div class="row">
                            <div class="col">
                                <h5>Categoria</h5>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">

                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <select name="Categoria" id="categoria" required>
                                    <option value="Smoothies" <?php echo $Categoria === 'Smoothies ' ? 'selected' : ''; ?>>
                                        Smoothies
                                    </option>
                                    <option value="Cocteles" <?php echo $Categoria === 'Cocteles' ? 'selected' : ''; ?>>
                                        Cocteles
                                    </option>
                                    <option value="Sabrilokos" <?php echo $Categoria === 'Sabrilokos' ? 'selected' : ''; ?>> Sabrilokos
                                    </option>
                                    <option value="Frutas Lokas" <?php echo $Categoria === 'Frutas Lokas' ? 'selected' : ''; ?>>
                                        Frutas Lokas
                                    </option>
                                    <option value="Elotes" <?php echo $Categoria === 'Elotes' ? 'selected' : ''; ?>>
                                        Elotes
                                    </option>
                                    <option value="Nachos" <?php echo $Categoria === 'Nachos' ? 'selected' : ''; ?>>
                                        Nachos
                                    </option>
                                </select>
                            </div>

                            <div class="col">

                            </div>
                            <div class="col">
                                <input type="submit" name="submit" value="Guardar">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <script src="AProducto.js"></script>
        <script src="main.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>