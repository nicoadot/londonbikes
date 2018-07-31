@extends('layouts.default')

@section('title')
  {{'Datos Personales'}}
@endsection

<section id="bloquePrincipal" >
  <div class="angosto">
    <header class="angosto">
      <h1>Usuario</h1>
    </header>
    <div class="angosto">
      <form class="" action="registro.php" method="post">
          <img src="/imagenes/default.png" width="150px" alt="">
          <div class="campo" style="display:block">
            <label style="display:block" for="avatar">Foto de Perfil</label>
            <input class="boton alt" type="file" name="avatar" />
          </div>
        <div class="campo medio primero">
          <label for="name">Nombre</label>
          <input type="text" name="nombre" id="nombre"  value="" required />
        </div>
        <div class="campo medio">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido"  value="" required />
        </div>
        <div class="campo medio primero">
          <label for="mail">Mail</label>
          <input type="text" name="mail" id="mail" placeholder="juan@dominio.com.ar"  value="" />
        </div>
        <div class="campo medio">
            <label for="password">Nueva Password</label>
          <input type="password" name="password" id="password" placeholder="Debe tener al menos 8 caracteres alfanumericos" />
        </div>

        <div style="display:block">
          <input type="submit" name="registrar" value="ACEPTAR" class="boton alt">
        </div>
      </form>
    </div>
  </div>
</section>
