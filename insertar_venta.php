<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Obtener los datos del formulario
  $codigo = $_POST["codigo"];
  $precioUnitario = $_POST["precio_unitario"];
  $cantidad = $_POST["cantidad"];
  $total = $_POST["total"];

  // Preparar la consulta SQL
  $query = "INSERT INTO venta (codigo, precio_unitario, cantidad, total) VALUES (, '$precioUnitario', '$cantidad', '$total')";

  // Ejecutar la consulta
  if ($conexion->query($query) === TRUE) {
    // La inserción se realizó correctamente
    echo "Venta insertada correctamente";
  } else {
    // Hubo un error al realizar la inserción
    echo "Error al insertar venta: " . $conexion->error;
  }
} else {
  // El método de solicitud no es válido
  echo "Método de solicitud no válido";
}

$conexion->close();
?>
