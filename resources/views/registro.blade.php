@extends ('layouts.default')
@section('title')
  {{'Registro'}}
@endsection


<section id="bloquePrincipal" >
  <div class="angosto">
    <header class="angosto">
      <h1>Registro</h1>
    </header>
    <div class="angosto">
      <form class="" action="registro.php" method="post" id="formRegistro">
        {{csrf_field()}}
        <div class="">
          <div class="campo medio primero danger" style="">
            <label for="name">Errores</label>
          </div>
          <div class="campo medio primero">
            <label for="name">Nombre</label>
            <input type="text" name="nombre" id="nombre"  value="" required/>
          </div>
          <div class="campo medio">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido"  value=""  required />
          </div>
          <div class="campo medio primero">
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail" placeholder="juan@dominio.com.ar"  value="" required />
          </div>
          <div class="campo medio">
              <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Debe tener al menos 8 caracteres alfanumericos" required />
          </div>
        </div>
        <div style="display: block">
          <input type="submit" name="registrar" value="ACEPTAR" class="boton" style="margin-top:20px">
        </div>
      </form>
    </div>
  </div>
  <script src="/js/validadorRegistro.js">
  </script>
</section>
