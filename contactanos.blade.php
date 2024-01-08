<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”keywords” content=”HTML5, CSS3, Javascript”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/barraNav.css">
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

<!-- Formulario de contacto -->

<div class="container my-3" id="Formulario-contacto">  
    <div class="text-center pt-0 mb-4" id="titulo-formulario">
        <div><img src="img/contacto/contacto.png" alt="Contactanos" width="200" class="img-fluid"></div>
        <p><span class="text-primary fs-1 fw-bold">Formulario de Contacto</span> </p>
        <p class="fs-5">Escríbenos y en breve los pondremos en contacto contigo o visita nuestra pagina de facebook en link de abajo.</p>
    </div> 
    <form>
      <div class="form-group"> 
        <p>
            <label for="EjeNombre">Nombre <span class="obligatorio text-danger"><b>*</b></span>
        </p>     
        <input type="text" class="form-control" id="EjemploProducto" placeholder="Escribe tu nombre" minlength="3" maxlength="20" required pattern="[A-Za-z ]+" title="Solo escribir letras"\>            
      </div>
      <div class="form-group">
          <p>
        <label for="ejemploCodigo">Email <span class="obligatorio text-danger"><b>*</b></span>
        </p>
        <input type="email" class="form-control" id="ejemploCodigo" placeholder="Escribe el correo electronico" required="obligatorio"\>
      </div>
      <div class="form-group">
          <p>
        <label for="ejemploexistencia">Telefono </label>
        </p>
        <input type="tel" class="form-control" id="ejemploexistencia" placeholder="Ingrese su numero telefonico" title="Escribe solo numeros"\>
      </div>
      <div class="form-group">
        <p>
            <label for="asunto" class="colocar_asunto">Asunto <span class="obligatorio text-danger"><b>*</b></span></label>
        </p> 
              <input type="text" class="form-control" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
          
      </div>
      <div class="form-group">
        <p>
            <label for="mensaje" class="colocar_mensaje">Mensaje <span class="obligatorio text-danger"><b>*</b></span></label>  
        </p>                    
            <textarea name="introducir_mensaje" class="form-control" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
            &nbsp;
      </div>
      <button type="submit" class="btn btn-success">Enviar</button><br></br>  
      <div>
        <p class="aviso">
            <span class="obligatorio text-danger"><b> * </b></span>los campos son obligatorios.
          </p>
      </div>
         
    </form>  

</div>

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

