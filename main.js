let listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});

  function validateID() {
    var phoneInput = document.getElementById("id");
    var phoneError = document.getElementById("id-error");
    var nombreInput = document.getElementById('nombre');
  
    // Eliminar caracteres no numéricos
    var phoneNumber = phoneInput.value.replace(/\D/g, "");

    if (phoneNumber.length > 4) {
      phoneNumber = phoneNumber.substr(0, 4);
    }
  
    // Mostrar o ocultar mensaje de error
    if (phoneNumber.length < 4) {
      phoneError.style.display = "block";   
      nombreInput.disabled = true;
    } else {
      phoneError.style.display = "none";
      nombreInput.disabled = false;
    }
    phoneInput.value = phoneNumber;
  }
  
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
  var password = document.getElementById("password");
  
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
    var apeInput = document.getElementById('activo');
    var passwError = document.getElementById("pas-error");

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
     // nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');
      if (nombre.length > 10) {
         passwError.style.display = "none";   
          apeInput.disabled = false;
        } else {
         passwError.style.display = "block";
          apeInput.disabled = true;
        }

      nombreInput.value = nombre;
    }); 
  } 
  function validarActivo() {
    var puestoInput = document.getElementById('puesto');
    var apeInput = document.getElementById('activo');
    var RegInput = document.getElementById('registrar');

    activo.addEventListener("change", function () {
        puestoInput.disabled = apeInput="";
        RegInput.disabled = apeInput="";
    }); 
  } 
  
