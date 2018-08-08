  var form1 = document.getElementById('formRegistro');
  const regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  var error = false;
  var nombre = document.getElementById('name');
  var errorNombre = document.getElementById('errorName');

  var apellido = document.getElementById('lastname');
  var errorApellido = document.getElementById('errorLastName');

  var mail = document.getElementById('email');
  var errorMail = document.getElementById('errorMail');

  var clave = document.getElementById('password');
  var errorClave = document.getElementById('errorPassword');

  var confirmClave = document.getElementById('password-confirm');
  var errorConfirmClave = document.getElementById('errorConfirmPass');


  form1.addEventListener('submit', function(ev){
    ev.preventDefault();
    if(nombre.value.trim() == ''){
      errorNombre.innerText = "Por favor, ingrese un Nombre";
      errorNombre.style.display = "";
      error = true;
    }
    else if(apellido.value.trim() == ''){
      errorNombre.style.display = "none";
      errorApellido.innerText = "Por favor, ingrese un Apellido";
      errorApellido.style.display = "";
      error = true;
    }
    else if(mail.value.trim() == '' || !regexEmail.test(mail.value.trim())) {
      errorApellido.style.display = "none";
      errorMail.innerText = "Por favor, ingrese un Mail valido";
      errorMail.style.display = "";
      error = true;
    }

    else if(clave.value.trim() == ''){
      errorMail.style.display = "none";
      errorClave.innerText = "Por favor, ingrese una Clave";
      errorClave.style.display = "";
      error = true;
    }
    else if(confirmClave.value.trim() == ''){
      errorClave.style.display = "none";
      errorConfirmClave.innerText = "Por favor, confirme la clave";
      errorConfirmClave.style.display = "";
      error = true;
    }
    else if(clave.value != confirmClave.value){
      errorConfirmClave.style.display = "none";
      errorConfirmClave.innerText = "Las claves ingresadas no coinciden";
      errorConfirmClave.style.display = "";
      error = true;
    }
    else if(!error){
      errorConfirmClave.style.display = "none";
      form1.submit();
    }
  });
