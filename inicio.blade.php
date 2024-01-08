<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”keywords” content=”HTML5, CSS3, Javascript”>    
    <link rel="stylesheet" type="text/css" href="css/barraNav.css">
    <link rel="stylesheet" type="text/css" href="css/acerca.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
<!-- Barra de navegacion -->
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="AltaPersona.php">        
        <span class="text-white fs-3 fw-bold" ><img src="img/logo.png" alt="" width="100" height="100">TuSnack</span>
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link active" aria-current="page" href="index.php">
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

<!-- Carrusel de imagenes -->
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="img/carrusel/carrusel1.jpg" class="d-block w-100" alt="Imagen 1" width="640" height="600">
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/carrusel/carrusel2.png" class="d-block w-100" alt="imagen 2" width="640" height="600">
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/carrusel/carrusel3.png" class="d-block w-100" alt="imagen 3" width="640" height="600">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
 </div>

  <!-- Intro -->
   <section class="w-50 mx-auto text-center pt-5"id="intro">
      <h1 class="text-primary p-3 fs-2 border-top border-4">Extenso, Innovador y Exclusivo surtido de los mejores productos que bombardean tu paladar. <span></span></h1>
      <p><span></span></p>
   </section>

  <!-- Categorias -->
   <section class="container-fluid ">
      <div class="row w-75 mx-auto border-bottom border-4 servicio-fila">

          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
              <img src="img/categorias/lacteos.jpg" alt="Escolares" width="180" height="160">
              <div>
                  <a href="vistaLacteos.php" style="text-decoration: none;"><h3 class="text-success fs-2 mt-4 px-4 pb-1">Cocteles</h3></a>
                  <p class="px-4 fs-5">Extensa variedad de ingredientes, colores y sabores, Dulces para el paladar y para el ojo!</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/aseo.jpg" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaSmoothies.php" style="text-decoration: none;"><h3 class="text-primary fs-2 mt-4 px-4 pb-1">Smoothies</h3></a>
                <p class="px-4 fs-5">Deliciosos sabores frescos para todo momento, con una suave sensación para ti!</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/abarrotes.jpg" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaAbarrotes.php" style="text-decoration: none;"><h3 class="text-warning fs-2 mt-4 px-4 pb-1">Sabrilokos</h3></a>
                <p class="px-4 fs-5">La botana ideal para todo el que sabe apreciar su descanso, ven a comer hasta llenarte con nuestras ricas creaciones. 
                  
                </p>
          </div>
        </div>
      </div>
      <div class="row w-75 mx-auto border-bottom border-4 servicio-fila">
        
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
              <img src="img/categorias/bebidas.png" alt="Escolares" width="180" height="160">
              <div>
                  <a href="vistaBebidas.php" style="text-decoration: none;"><h3 class="text-success fs-2 mt-4 px-4 pb-1">Nachos</h3></a>
                  <p class="px-4 fs-5">Deliciosas piezas de maíz tostado con queso amarillo fundido y con picante extra que deleitan el paladar</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/limpieza.jpg" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaLimpieza.php" style="text-decoration: none;"><h3 class="text-primary fs-2 mt-4 px-4 pb-1">Elotes</h3></a>
                <p class="px-4 fs-5">Riquisimos elotes preparados con variedad de ingredientes que son el snack predilecto mexicano</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 my-3">
            <img src="img/categorias/farmacia.png" alt="Escolares" width="180" height="160">
            <div>
            <a href="vistaFarmacia.php" style="text-decoration: none;"><h3 class="text-warning fs-2 mt-4 px-4 pb-1">Frutas Lokas</h3></a>
                <p class="px-4 fs-5">Frutas enormes jugosas y deliciosas que bombardean el paladar con dulces aciditos que rematan la intensidad.</p>
          </div>
        </div>
      </div>
      
   </section>

  <!-- backgrond pie de la pagina -->

   <section id="seccion-contactos">
      <div id="bg-contactos">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000b76" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,170.7C384,171,480,213,576,208C672,203,768,149,864,149.3C960,149,1056,203,1152,218.7C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
   </section>

  <!-- Pie de pagina -->
   <footer class="w-100  justify-content-center ">
      <p class="fs-5 px-3 pt-3">TuSnack &copy; Todos los derechos reservados 2023</p>
      <div id="iconos">
          <a href="https://www.facebook.com"><i class="bi bi-facebook"></i></i></i></a>
          <a href="#"><i class="bi bi-twitter"></i></i></i></a>
          <a href="https://www.instagram.com/tusnackoax/"><i class="bi bi-instagram"></i></i></i></a>
      </div>
   </footer>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

