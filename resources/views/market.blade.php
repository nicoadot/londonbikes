@extends('layouts.default')
@section('title')
  {{'Market'}}
@endsection

<section id="bloquePrincipal">
  <div class="angosto">
    <header>
      <h1>MARKET!</h1>
      <p>Bienvenido <strong></strong>al e-shop de London Bikes</p>
    </header>
  </div>
</section>
<section>
  <div class="angosto">
    <div class="box alt" style="display:inline-block">
      <div class="row 50% uniform">
        <div class="12u$" ><span class="imagen fit"><img src="imagenes/wall3.jpg" alt="" style="height:500px" /></span></div>
        <?php
        echo("<h3>GARAGE</h3>");

         foreach ($productos as $producto)
         {
           echo('<div class="contenedor"><span class="imagen fit"><img class="producto" src="imagenes/'.$producto['Imagen'].'"'.'alt="'.$producto['Descripcion'].'" /><ul class="mas centrado"><li><a href="#" class="boton alt">AGREGAR</a></li></ul></span></div>');
         }
         ?>
      </div>
    </div>
    <div class="angosto" style="margin:0 auto"
      <div class="angosto paginador">
        {{$productos->links()}}
      </div>
    </div>
  </div>



</section>
