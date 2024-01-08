<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los parámetros de la solicitud POST
  $productId = $_POST["productId"];
  $quantity = $_POST["quantity"];

  // Verificar si el producto existe en la base de datos
  $query = "SELECT stock FROM producto WHERE codigo = '$productId'";
  $resultado = $conexion->query($query);

  if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $stock = $row["stock"];

    if ($stock >= $quantity) {
      // Restar la cantidad del stock
      $newStock = $stock - $quantity;

      // Actualizar el stock en la base de datos
      $updateQuery = "UPDATE producto SET stock = $newStock WHERE codigo = '$productId'";
      $conexion->query($updateQuery);

      // Enviar una respuesta de éxito
      echo "Stock actualizado correctamente.";

      // Recargar la página después de un breve retraso (1 segundo)
      echo '<script>
              setTimeout(function() {
                location.reload();
              }, 1000);
            </script>';
    } else {
      // Enviar una respuesta de error si la cantidad solicitada es mayor al stock disponible
      echo "No hay suficiente stock disponible.";
    }
  } else {
    // Enviar una respuesta de error si el producto no se encuentra en la base de datos
    echo "El producto no existe.";
  }
} else {
  // Enviar una respuesta de error si la solicitud no es de tipo POST
  echo "Error: Método no permitido.";
}
?>

