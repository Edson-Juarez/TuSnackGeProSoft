<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=”keywords” content=”HTML5, CSS3, Javascript”>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="css/barraNav.css">
  <link rel="stylesheet" type="text/css" href="css/productos.css">
  <link rel="stylesheet" type="text/css" href="css/lista.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Inicio</title>
</head>

<body>
  <!-- Barra de navegacion -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" id="menu">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <span class="text-white fs-3 fw-bold"><img src="img/logo.png" alt="" width="100" height="100">TuSnack</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="inicio.blade.php">
              <span class="fs-5">Inicio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="productos.blade.php">
              <span class="fs-5">Productos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contactanos.blade.php">
              <span class="fs-5">Contactanos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Acercade.blade.php">
              <span class="fs-5">Acerca de</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <a class="navbar-brand" href="#">
      <span class="text-white fs-3 fw-bold text-right" id="catalogo">¡Compra YA!</span>
    </a>
  </nav>

  <!-- CONTENIDO DE LISTA Y PRODUCTOS -->
  <div class="container" id="CO">
    <div class="row">

      <!-- CUERPO DEL CATALOGO DE PRODUCTOS -->
      <div class="container-fluid" id="fondo">
        <div class="container">
          <H1 class="fs-5 p-4 text-center border-bottom border-4">CATALOGO DE PRODUCTOS</H1>
        </div>
      </div>

      <!-- LISTA -->
      <div class="col-sm-12 col-lg-1 col-md-auto">
        <nav class="navbar navbar-expand-md" id="columna2">
          <ul class="nav flex-column listaCat  border">
            <a href="#" style="text-decoration: none;" class="text-dark fs-5 pb-2 my-2"
              id="TitCat"><b>Categorias</b></a>
            <div class="list-group" id="Categorias">
              <a href="productos.blade.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action"><b>Todos</b></button></a>
              <a href="productosLacteos.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action active bg-success"
                  aria-current="true"><b>Lacteos</b></button></a>
              <a href="productosLeche.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action">Leches</button></a>
              <a href="productosYogurth.php" style="text-decoration: none;"> <button type="button"
                  class="list-group-item list-group-item-action">Yogurth</button></a>
              <a href="cuidadoyaseo.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action active" aria-current="true"><b>Cuidado y aseo
                    personal</b></button></a>
              <a href="productosJabones.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action">Jabones</button></a>
              <a href="productosDesodorant.php" style="text-decoration: none;"> <button type="button"
                  class="list-group-item list-group-item-action">Desodorantes</button></a>
              <a href="productosAbarrotes.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action active bg-warning text-dark"
                  aria-current="true"><b>Abarrotes</b></button></a>
              <a href="productosEnlatados.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action">Enlatados</button></a>
              <a href="productosGeneral.php" style="text-decoration: none;"> <button type="button"
                  class="list-group-item list-group-item-action">General</button></a>
              <a href="BebidasyLico.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action active bg-success" aria-current="true"><b>Bebidas y
                    licores</b></button></a>
              <a href="productosRefrescos.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action">Refrescos</button></a>
              <a href="productosBebidasAlco.php" style="text-decoration: none;"> <button type="button"
                  class="list-group-item list-group-item-action">Bebidas alcoholicas</button></a>
              <a href="productosLimpiezaHogar.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action active" aria-current="true"><b>Limpieza para el
                    hogar</b></button></a>
              <a href="productosPisos.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action">Pisos</button></a>
              <a href="productosAcceLimp.php" style="text-decoration: none;"> <button type="button"
                  class="list-group-item list-group-item-action">Accesorios de limpieza</button></a>
              <a href="productosFarmacia.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action active bg-warning text-dark"
                  aria-current="true"><b>Farmacia</b></button></a>
              <a href="productosPastillas.php" style="text-decoration: none;"><button type="button"
                  class="list-group-item list-group-item-action">Pastillas</button></a>
              <a href="productosJarabes.php" style="text-decoration: none;"> <button type="button"
                  class="list-group-item list-group-item-action">Jarabes</button></a>

            </div>

          </ul>
        </nav>
      </div>

      <!-- CONTENDIO -->
      <div class="col-sm-12 col-lg-11 col-md-auto" id="columna">


        <!-- Contenido de productos -->
        <div class="container">
          <?php
          include("conexion.php");
          $query = "select * from producto  ORDER BY nombre ASC;";
          if (isset($_POST['consulta'])) {
            $q = $mysqli->real_escape_string($_POST['consulta']);
          }
          $resultado = $conexion->query($query);
          while ($row = $resultado->fetch_assoc()) {
            ?>
            <div class="card" id="Buscador">
              <img src="<?php echo ($row['Img']); ?>" width="100">
              <h4 class="fs-5 text-center">
                <?php echo $row['nombre_producto'] ?>
              </h4>
              <p class="text-center fs-5"><b>
                  <?php echo $row['Categoria'] ?>
                </b></p>
              <h3 class="fs-6"><b>Código: </b>
                <?php echo $row['codigo'] ?>
              </h3>
              <h3 class="fs-6"><b>Precio: </b>$
                <?php echo $row['precio_unitario'] ?>
              </h3>
              <h3 class="fs-6"><b>Stock: </b>
                <?php echo $row['stock'] ?>
              </h3>
            </div>
            <?php
          }
          ?>
        </div>
      </div>



    </div>
  </div>
  </div>

  <!-- backgrond pie de la pagina -->

  <section id="seccion-contactos">
    <div id="bg-contactos">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#000b76" fill-opacity="1"
          d="M0,256L48,234.7C96,213,192,171,288,170.7C384,171,480,213,576,208C672,203,768,149,864,149.3C960,149,1056,203,1152,218.7C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
    </div>
  </section>

  <!-- Pie de pagina -->
  <footer class="w-100  justify-content-center ">
    <p class="fs-5 px-3 pt-3">ExpertD. &copy; Todos los derechos reservados 2021</p>
    <div id="iconos">
      <a href="https://www.facebook.com/Shelygroupmx" target="_blank"><i class="bi bi-facebook"></i></i></i></a>
      <a href="#"><i class="bi bi-twitter"></i></i></i></a>
      <a href="#"><i class="bi bi-instagram"></i></i></i></a>
    </div>
  </footer>










  <script src="js/main.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>