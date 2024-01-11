<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "productos";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db) or die ("error");

    if($conexion){
        echo "";
    }else{
        echo "mal";
    }

    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        $query = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
        $resultado = mysqli_query($conexion, $query);

        if($resultado){
            echo "Registro insertado correctamente";
        }else{
            echo "Error al insertar el registro";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario para insertar datos en MySQL</title>
</head>
<body>
    <h1>Insertar datos en MySQL</h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion"><br><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio"><br><br>

        <input type="submit" name="submit" value="Insertar">
    </form>
</body>
</html>
