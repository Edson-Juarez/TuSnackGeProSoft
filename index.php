<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['montoRecibido'])) {
    $montoRecibido = mysqli_real_escape_string($conexion, $_POST['montoRecibido']);

    // Assume $productos is an array containing the details of items in the cart
    // You may need to adjust this based on your actual data structure
    $productos = [
        // Example item, replace with actual items in the cart
        ['codigo' => 'A1001', 'nombre' => 'Smoothie de Mango 2', 'precio' => 40.00],
    ];

    foreach ($productos as $producto) {
        $codigo = $producto['codigo'];
        $cantidad_venta = 1; // Assuming you are selling one unit of each product

        // Your existing sale logic here...
        $total_venta = $producto['precio'] * $cantidad_venta;

        // Insert into ventas table
        $query_venta = "INSERT INTO ventas (codigo_producto, cantidad, total_venta) 
                        VALUES ('$codigo', $cantidad_venta, $total_venta)";

        $result_venta = mysqli_query($conexion, $query_venta);

        if ($result_venta) {
            // Update stock in the product table
            $query_stock_update = "UPDATE producto SET stock = stock - $cantidad_venta WHERE codigo = '$codigo'";
            $result_stock_update = mysqli_query($conexion, $query_stock_update);

            if (!$result_stock_update) {
                echo "Error al actualizar el stock: " . mysqli_error($conexion);
            }
        } else {
            echo "Error al registrar la venta: " . mysqli_error($conexion);
        }
    }

    echo "Venta registrada y stock actualizado correctamente.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="app.js" async></script>
    <title>TuSnack</title>
    <style>
        /* Estilos personalizados para la barra de navegación */
        .navbar-custom {
            background-color: #ff0000;
            /* Cambia el color de fondo a rojo (#ff0000) */
        }

        /* Estilo para el mensaje de monto insuficiente */
        .insuficiente {
            color: red;
        }

        /* Estilo para el mensaje de monto suficiente */
        .suficiente {
            color: green;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 navbar-custom" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="AltaPersona.php">
                <span class="text-white fs-3 fw-bold"><img src="img/logo.png" alt="" width="40"
                        height="40">TuSnack</span>
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

    <header>
        <h1></h1>
    </header>

    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <?php
            include("conexion.php");
            $query = "SELECT * FROM producto ORDER BY nombre_producto ASC;";
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

        <div class="carrito" id="carrito">
            <!-- Carrito de Compras -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>
                <div class="carrito-items">
                    <!-- Aquí van los elementos del carrito -->
                </div>
                <div class="carrito-total">
                    <div class="fila">
                        <strong>Tu Total</strong>
                        <span class="carrito-precio-total">
                            $120.00
                        </span>
                    </div>
                    <!-- Nueva sección para Monto Recibido y Cambio -->
                    <div class="fila">
                        <label for="montoRecibido">Monto Recibido:</label>
                        <input type="number" id="montoRecibido" name="montoRecibido"
                            placeholder="Ingrese el monto recibido" oninput="calcularCambio()">
                    </div>
                    <div class="fila">
                        <strong>Cambio:</strong>
                        <span class="carrito-cambio" id="cambio">
                            $0.00
                        </span>
                    </div>
                    <!-- Mensaje de monto suficiente o insuficiente -->
                    <div class="fila" id="mensajeMonto">
                        <!-- Aquí se mostrará el mensaje -->
                    </div>
                    <button class="btn-pagar" name="submit" type="submit">Pagar <i
                            class="fa-solid fa-bag-shopping"></i></button>
                </div>

            </form>
        </div>
    </section>

    <script>
        const carrito = document.getElementById('carrito');
        const carritoItems = document.querySelector('.carrito-items');
        const totalElement = document.querySelector('.carrito-precio-total');
        const mensajeMonto = document.getElementById('mensajeMonto');
        const productosCarritoInput = document.getElementById('productos-carrito');

        const productos = [
            { codigo: '001', nombre: 'Smoothie 1', precio: 50.00 },
            { codigo: '002', nombre: 'Smoothie 2', precio: 60.00 },
            // ... Add more products as needed
        ];

        productos.forEach(producto => {
            const boton = document.getElementById(`agregar-carrito-${producto.codigo}`);
            boton.addEventListener('click', () => agregarAlCarrito(producto.codigo, producto.nombre, producto.precio));
        });

        function agregarAlCarrito(codigo, nombre, precio) {
            const itemHTML = `<div>${nombre} - $${precio.toFixed(2)}</div>`;
            carritoItems.innerHTML += itemHTML;
            calcularTotalCarrito();
            actualizarProductosCarrito();
        }

        function calcularTotalCarrito() {
            const items = carritoItems.querySelectorAll('div');
            let total = 0;
            items.forEach(item => {
                const precio = parseFloat(item.innerText.split('-')[1].trim().substring(1));
                total += precio;
            });
            totalElement.innerText = `$${total.toFixed(2)}`;
        }

        function calcularCambio() {
            // ... (tu lógica actual para calcular el cambio)
            const montoRecibido = parseFloat(document.getElementById('montoRecibido').value);
            const totalElement = document.querySelector('.carrito-precio-total');
            const total = parseFloat(totalElement.innerText.substring(1));
            const cambio = montoRecibido - total;
            // Actualizar el cambio
            document.getElementById('cambio').innerText = cambio.toFixed(2).toString();

            // Actualizar el mensaje de monto suficiente o insuficiente
            const mensajeMonto = document.getElementById('mensajeMonto');
            if (montoRecibido >= total) {
                mensajeMonto.innerText = 'Monto suficiente';
                mensajeMonto.classList.remove('insuficiente');
                mensajeMonto.classList.add('suficiente');
            } else {
                mensajeMonto.innerText = 'Monto insuficiente';
                mensajeMonto.classList.remove('suficiente');
                mensajeMonto.classList.add('insuficiente');
            }
        }


        function actualizarProductosCarrito() {
            const items = carritoItems.querySelectorAll('div');
            const productosCarrito = Array.from(items).map(item => {
                const nombre = item.innerText.split('-')[0].trim();
                const precio = parseFloat(item.innerText.split('-')[1].trim().substring(1));
                return { nombre, precio };
            });
            productosCarritoInput.value = JSON.stringify(productosCarrito);
        }

        function realizarPago() {
            document.forms[0].submit();
        }

        function mostrarTicket() {
            const ticketHTML = `
  <div class="container w-75" id="imp">
    <!-- ... (ticket content) ... -->
  </div>
`;

            const popupWin = window.open('', '_blank');
            popupWin.document.open();
            popupWin.document.write(ticketHTML);
            popupWin.document.close();
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1.3/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>