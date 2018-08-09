  var span = document.getElementById('spanUsuarios');

  setInterval(function(){
    fetch('http://localhost:8000/api/contarUsuarios')
    .then((resp) => resp.json())
    .then(function(data) {
        span.innerText=data;
      })
    .catch(function(error) {
      console.log(error);
    });
  }, 3000);
