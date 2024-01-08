<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”keywords” content=”HTML5, CSS3, Javascript”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/barraNav.css">
    <link rel="stylesheet" type="text/css" href="css/acerca.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
<!-- Barra de navegacion -->
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">        
        <span class="text-white fs-3 fw-bold"><img src="img/logo.png" alt="" width="100" height="100">TuSnack</span>
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
      </ul>
    </div>
  </div>
   <a class="navbar-brand" href="#">
    <span class="text-white fs-3 fw-bold text-right" id="catalogo">¡Compra YA!</span>
   </a>
</nav>

<!-- Contenido de acerca -->
<div class="container-fluid" id="fondo">
 <div class="container w-50 my-1" id="Formulario-acercade">  
    <div class="text-center pt-0 mb-4" id="img-acercade">
        <div><img src="img//logo.png" alt="Contactanos" width="400" class="img-fluid"></div>       
    </div> 
    <div class="text-justify  text-white pt-0 mb-4" id="texto-acercade">
        <p class="fs-4 my-3">Misión:
          Somos una empresa dedicada a ala venta de snacks tales como: fresas con crema,
          Smoothie, nachos, dorilocos, tostiesquite, paletas de hielo, gomitas enchiladas,
          y más, logrando así la satisfacción del público en general, comprometidos con
          todos los invitados a vivir una experiencia única y divertida al disfrutar
          de sus snacks elaborados con calidad, creatividad e innovación.
        </p>
        <p class="fs-4 my-3">
          Visión:
          Ser una empresa líder en el mercado, reconocida por ser la opción #1 de Snacks de 
          nuestros invitados, brindando una amplia variedad de productos a buen precio,
          logrando así una certificación de calidad, comprometidos con la creatividad e innovación.

        </p>
        <p class="fs-4 my-3">Dentro de nuestras redes sociales te puedes enterar de nuestras promociones y lanzamientos. Si eres parte de nuestra comunidad de clientes online, puedes acceder a nuestras promociones exclusivas de la linea.<br>
            No te pierdas una experiencia llena de sabor y calidad.
            </p>
            <h3 class="fs-4 text-center">Todo esto sin salir de la comodidad de tu hogar, al alcance de un click  <img src="img/acerca de/clic.png" alt="click" width="100"></h3>
    </div>

</div>
</div>

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

