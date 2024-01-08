let listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {
  listElement.addEventListener('click', () => {

    listElement.classList.toggle('arrow');

    let height = 0;
    let menu = listElement.nextElementSibling;
    if (menu.clientHeight === 0) {
      height = menu.scrollHeight;
    }

    menu.style.height = `${height}px`;

  })
});

function validateID() {
  var phoneInput = document.getElementById("id");
  var phoneError = document.getElementById("id-error");
  var tipoPInput = document.getElementById('proveedor');
  var marInput = document.getElementById('idMarca');
  // Eliminar caracteres no numéricos
  var phoneNumber = phoneInput.value.replace(/\D/g, "");

  if (phoneNumber.length < 13) {
    phoneError.style.display = "block";
    tipoPInput.disabled = true;
    marInput.disabled = true;
  } else {
    phoneError.style.display = "none";
    tipoPInput.disabled = false;
    marInput.disabled = false;
  }
  phoneInput.value = phoneNumber;
}

function validarProvedor() {
  var nombreInput = document.getElementById('proveedor');
  var apeInput = document.getElementById('idMarca');
  if (nombreInput.value === "") {
    apeInput.disabled = true;
  } else {
    apeInput.disabled = false;
  }
}

// Add these two functions for validating Categoria
function validaCategoria() {
  var categoriaInput = document.getElementById("categoria");
  var submitButton = document.querySelector('input[name="submit"]');

  if (categoriaInput.value === "") {
    submitButton.disabled = true;
  } else {
    submitButton.disabled = false;
  }
}

// Attach the validaCategoria function to the change event of the Categoria input
document.getElementById("categoria").addEventListener("change", validaCategoria);


function validateIDMarca() {
  var phoneInput = document.getElementById("idMarca");
  var phoneError = document.getElementById("idM-error");
  var tipoPInput = document.getElementById('modelo');

  // Eliminar caracteres no numéricos
  var phoneNumber = phoneInput.value.replace(/\D/g, "");

  if (phoneNumber.length > 6) {
    phoneNumber = phoneNumber.substr(0, 6);
  }

  // Mostrar u ocultar mensaje de error
  if (phoneNumber.length < 6) {
    phoneError.style.display = "block";
    tipoPInput.disabled = true;
  } else {
    phoneError.style.display = "none";
    tipoPInput.disabled = false;
  }
  phoneInput.value = phoneNumber;
}

function validarModelo() {
  var nombreInput = document.getElementById('modelo');
  var apeInput = document.getElementById('nombre');

  nombreInput.addEventListener('input', function () {
    var nombre = nombreInput.value;
    nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');

    if (nombre.length > 6) {
      apeInput.disabled = false;
    } else {
      apeInput.disabled = true;
    }
    nombreInput.value = nombre;
  });
}

function validarNombre() {
  var nombreInput = document.getElementById('nombre');
  var apeInput = document.getElementById('descripcion');

  nombreInput.addEventListener('input', function () {
    var nombre = nombreInput.value;
    nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');

    if (nombre.length > 5) {
      apeInput.disabled = false;
    } else {
      apeInput.disabled = true;
    }
    nombreInput.value = nombre;
  });
}

function validarDescripcion() {
  var nombreInput = document.getElementById('descripcion');
  var apeInput = document.getElementById('precio_unitario');
  var stockinput = document.getElementById("stock");
  var pCinput = document.getElementById("precio_compra");
  var cate = document.getElementById("Categoria");

  nombreInput.addEventListener('input', function () {
    var nombre = nombreInput.value;
    nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/, '');

    if (nombre.length > 5) {
      apeInput.disabled = false;
      stockinput.disabled = false;
      pCinput.disabled = false;
      cate.disabled = false;
    } else {
      apeInput.disabled = true;
      stockinput.disabled = true;
      pCinput.disabled = true;
      cate.disabled = true;
    }
    nombreInput.value = nombre;
  });
}

function validaPrecioU() {
  var input = document.getElementById("precio_unitario").value;
  var stockinput = document.getElementById("stock");

  if (input < 3) {
    // Assuming you want to display the error message in the same span
    document.getElementById('error-messagenom').innerText = "El valor no puede ser negativo";
    stockinput.disabled = false;
    return false;
  } else {
    document.getElementById('error-messagenom').innerText = "";
    stockinput.disabled = true;
    return true;
    // Aquí puedes hacer algo con el valor válido, como enviarlo a través de una solicitud AJAX o realizar alguna acción adicional
  }
}

function validaStock(input) {
  var stockValue = input.value.trim();

  // Check if the stock value is a valid number
  if (isNaN(stockValue) || stockValue === '') {
      alert('Error: Stock must be a valid number.');
      input.value = '';  // Clear the input value
      input.focus();     // Set focus back to the stock input
      return false;
  }

  return true;  // Proceed with form submission
}

