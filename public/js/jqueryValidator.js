$("#formRegistro").submit(function(e) {
    e.preventDefault();
}).validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    // Specify validation error messages
    messages: {
      name: "Por favor, ingrese su Nombre",
      lastname: "Por favor, ingrese su Apellido",
      password: {
        required: "Por favor, escriba una Clave",
        minlength: "La Clave debe tener 8 caracteres minimo"
      },
      email: "Por favor, ingrese un Mail valido"
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
