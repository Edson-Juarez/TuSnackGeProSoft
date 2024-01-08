<?php
// incluir la conexión a la base de datos
include("conexion.php");

// verificar si se ha enviado el formulario
if (isset($_POST["submitBtn"])) {
   // código para procesar el formulario
   $nombre = $_POST["nombre"];
   $descripcion = $_POST["punitario"];
   $precio = $_POST["existencia"];

   $sql = "INSERT INTO productos (nombre, punitario, existencia) VALUES ('$nombre', '$descripcion', '$precio')";

   if (mysqli_query($conexion, $sql)) {
      echo "Datos insertados correctamente";
   } else {
      echo "Error al insertar datos: " . mysqli_error($conexion);
   }

   // cerrar la conexión a la base de datos
   $conexion->close();
}
?>
