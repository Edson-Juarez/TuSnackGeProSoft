<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");

// Consulta a la tabla venta para obtener los datos
$query = "SELECT * FROM venta";
$resultado = mysqli_query($conexion, $query);

$ventas = array();

if (mysqli_num_rows($resultado) > 0) {
  while ($row = mysqli_fetch_assoc($resultado)) {
    $ventas[] = $row;
  }
}



mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>
    
<head>
    
    <link rel="stylesheet" type="text/css" href="ticket.css">
    
</head>
<div class="container w-75" id="imp">
  <div class="col-sm-12 col-lg-12 col-md-auto columna">
    <form class="form my-5 p-5" id="Formulario">
      
      <div class="text-center">
            <span>Tienda de Abarrotes TuSnack</span>
        </div>
        <div class="text-center">
            <label class="font-weight-bold fs-4 text-center">Una Opcion cerca de ti</span>
        </div>
        <div class="text-center">
            <h1 class="font-weight-bold text-center">Direccion:</h1>
        </div>
        <div class="text-left">
            <span class="fs-5 text-left">Lista de compra:</span>
        </div>    
        <div class="text-left">
            <span class="fs-5 text-left">--------------------------------------------------------------------------</span>
        </div> 

      <div class="well">
        <table class="table">
          <thead class="thead">
            <tr>
              <th style="text-align:center">Producto</th>
              <th style="text-align:center">Cantidad</th>
              <th style="text-align:center">Total</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ventas as $venta): ?>
              <tr>
                <td style="text-align:center"><?php echo $venta['codigo']; ?></td>
                <td style="text-align:center"><?php echo $venta['cantidad']; ?></td>
                <td style="text-align:center">$<?php echo $venta['total']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>   
        <div class= "d-flex justify-content-end" id= "tota">
                <?php
                 $total ="  ";
                 ?>
                  <label id="totalventa"><b>Total de la venta:   </b><span class="fs-6">${{number_format($precio,2,'.',',')}}</span></label>
                  </div>  
                  <div class= "d-flex justify-content-end" id= "total">
                     <label class="pt-0"><b>Pago: Efectivo $<input type="numeric" id="recibido" class="text-center border-0" size=1></b></label>
                  </div>  
                  <div class= "d-flex justify-content-end" id= "total">
                  
                  </div>       
        </div>
        <br>
        <div class="text-center">
            <span><b>
                *Muchas gracias por realizar su compra*
            </b></span> 
        </div>
        <br>
        <div class="text-center">
            <span><b>
                *Favor de revisar su mercancia*
            </b></span> 
        </div>
    </form>
  </div>
</div>


</html>






















