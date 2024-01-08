function validarNombre() {
    var nombreInput = document.getElementById('nombre');
    var apeInput = document.getElementById('apep');

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');

      if (nombre.length > 2) {
      //  phoneError.style.display = "block";   
        apeInput.disabled = false;
      } else {
       // phoneError.style.display = "none";
        apeInput.disabled = true;
      }
      nombreInput.value = nombre;     
    }); 
  }
  function validarApeP() {
    var nombreInput = document.getElementById('apep');
    var apeInput = document.getElementById('apem');

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');
      if (nombre.length > 2) {
        //  phoneError.style.display = "block";   
          apeInput.disabled = false;
        } else {
         // phoneError.style.display = "none";
          apeInput.disabled = true;
        }

      nombreInput.value = nombre;
    }); 
  }  
  function validarApeM() {
    var nombreInput = document.getElementById('apem');
    var apeInput = document.getElementById('telefono');

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      //nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');
      if (nombre.length > 2) {
        //  phoneError.style.display = "block";   
          apeInput.disabled = false;
        } else {
         // phoneError.style.display = "none";
          apeInput.disabled = true;
        }

      nombreInput.value = nombre;
    }); 
  } 
  function validatePhone() {
    var phoneInput = document.getElementById("telefono");
    var phoneError = document.getElementById("phone-error");
    var emailInput = document.getElementById('email');
  
    // Eliminar caracteres no numéricos
    var phoneNumber = phoneInput.value.replace(/\D/g, "");
  
    // Validar el número de dígitos
    if (phoneNumber.length > 10) {
      phoneNumber = phoneNumber.substr(0, 10);
    }
  
    // Mostrar o ocultar mensaje de error
    if (phoneNumber.length < 10) {
      phoneError.style.display = "block"; 
      emailInput.disabled = true;  
    } else {
      phoneError.style.display = "none";
      emailInput.disabled = false;
    }
  
    // Actualizar el valor del campo de teléfono
    phoneInput.value = phoneNumber;
  }
 
  function validarEmail() {
    var emailInput = document.getElementById('email');
  var password = document.getElementById("direccion");
  
  var email = emailInput.value;
  var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
  
  if (!emailPattern.test(email)) {
    document.getElementById('error-message').innerText = 'El correo no tiene el formato válido.';
    password.disabled = true; // Deshabilitar el campo de contraseña si el correo no es válido
  } else {
    document.getElementById('error-message').innerText = '';
    password.disabled = false; // Habilitar el campo de contraseña si el correo es válido
  }
  }

  function validarContraseña() {
    var nombreInput = document.getElementById('password');
    var apeInput = document.getElementById('registrar');
    var passwError = document.getElementById("pas-error");

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');
      if (nombre.length < 9) {
         passwError.style.display = "none";   
          apeInput.disabled = false;
        } else {
         passwError.style.display = "block";
          apeInput.disabled = true;
        }

      nombreInput.value = nombre;
    }); 
  } 
  function validarDireccion() {
    var nombreInput = document.getElementById('direccion');
    var apeInput = document.getElementById('password');
   // var DirecError = document.getElementById("dirE");

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      //nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');

      if (nombre.length > 10) {
       // DirecError.style.display = "block";   
        apeInput.disabled = false;
      } else {
       // DirecError.style.display = "none";
        apeInput.disabled = true;
      }
      nombreInput.value = nombre;     
    }); 
  }