<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <script src="app.js" async></script>
    <title>TuSnack </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!DOCTYPE html>
<html>

<head>
    <title>¡Compra YA!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* Estilos personalizados para la barra de navegación */
        .navbar-custom {
            background-color: #ff0000;
            /* Cambia el color de fondo a rojo (#ff0000) */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 navbar-custom" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="AltaPersona.php">
                <span class="text-white fs-3 fw-bold"><img src="img/logo.png" alt="" width="100" height="100">TuSnack</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inicio.blade.php">
                            <span class="fs-5">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productosDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fs-5">Productos</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productosDropdown">
                        <li><a class="dropdown-item" href="index.php"> Todos los productos </a></li>
                            <li><a class="dropdown-item" href="vistaSmoothies.php"> Smoothies </a></li>
                            <li><a class="dropdown-item" href="vistaCuidado.php">Sabrilokos</a></li>
                            <li><a class="dropdown-item" href="vistaAbarrotes.php">Nachos</a></li>
                            <li><a class="dropdown-item" href="vistaBebidas.php">ELotes</a></li>
                            <li><a class="dropdown-item" href="vistaLimpieza.php">Cocteles</a></li>
                            <li><a class="dropdown-item" href="vistaFarmacia.php">Frutas Lokas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contactanos.blade.php">
                            <span class="fs-5">Contáctanos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Acercade.blade.php">
                            <span class="fs-5">Acerca de</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="loginC.php">
                            <span class="fs-5">Inicia Sesión</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <a class="navbar-brand" href="#">
            <span class="text-white fs-3 fw-bold text-right" id="catalogo">¡Compra YA!</span>
        </a>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<body>
    <header class="Farmacia">
        <h1></h1>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">






            <?php
            include("conexion.php");
            $query = "select * from producto where Categoria = 'Farmacia' ORDER BY nombre_producto ASC;";
            if (isset($_POST['consulta'])) {
                $q = $mysqli->real_escape_string($_POST['consulta']);
            }
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
                ?>


                <div class="item">
                    <span class="titulo-item">
                        <?php echo $row['nombre_producto'] ?>
                    </span>
                    <br>
                    <img src="<?php echo ($row['Img']); ?>" width="100">
                    <br>
                    <span class="titulo-item">
                        Categoria:
                        <br>
                        <?php echo $row['Categoria'] ?>
                        <br>
                    </span>
                    <span class="titulo-item">

                        Codigo de producto:
                        <?php echo $row['codigo'] ?>
                    </span>


                    <span class="precio-item">
                        <?php echo $row['precio_unitario'] ?>
                    </span>
                    <span class="precio-item">

                        Stock disponible:
                        <?php echo $row['stock'] ?>
                    </span>
                    
                    <?php if ($row['stock'] == 0): ?>
                            <br>
                            Pronto agregaremos más productos
                        <?php elseif ($row['stock'] == 1): ?>
                            <br>
                            Última unidad disponible 
                        <?php elseif ($row['stock'] >= 2 && $row['stock'] <= 3): ?>
                            <br>
                            Últimas unidades disponibles
                        <?php endif; ?>

                    <button class="boton-item" id="agregar-carrito-<?php echo $row['codigo']; ?>">Agregar al
                        Carrito</button>
                </div>

                <?php
            }
            ?>

        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">

            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>

</body>

</html>