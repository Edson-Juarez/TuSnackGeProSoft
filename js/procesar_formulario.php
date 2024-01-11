
<?php
include("conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $punitario = $_POST["punitario"];
        $stock = $_POST["stock"];
        $pcompra = $_POST["pcompra"];
        $Categoria = $_POST["categoria"];
        $provee = $_POST["provee"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];

        $sql = "INSERT INTO productos (nombre, punitario, stock, pcompra, categoria, provee, marca, modelo)
                VALUES ('$nombre', '$punitario', '$stock', '$pcompra', '$Categoria', '$provee', '$marca', '$modelo')";

        if (mysqli_query($conexion, $sql)) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conexion);
        }
    }

    $conn->close();
    