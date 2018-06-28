@extends('layouts.default')
@section('title')
  {{'LogIn'}}
@endsection
<section id="bloquePrincipal" >
  <div class="angosto">
    <header class="angosto">
      <span>No sos miembro? <strong><a href="{{url('/registro')}}">REGISTRARSE</a></strong> </span>
      <h1>ACCEDER</h1>
    </header>
    <div class="angosto">
      <form class="" action="" method="post">
        <div class="campo medio primero">
          <label for="name">Mail</label>
          <input type="text" name="user" id="nombre" />
        </div>
        <div class="campo medio">
          <label for="password">Password</label>
          <input type="password" name="password" id="password"/>
        </div>
        <div style="padding-top:10px">
          <input type="submit" name="registrar" value="ACCEDER" class="boton alt">
        </div>
      </form>
    </div>
  </div>
</section>
