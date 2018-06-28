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

  <section>
    <h3>GARAGE</h3>
    <div class="box alt">
      <div class="row 50% uniform">
        <div class="12u$"><span class="imagen fit"><img src="imagenes/wall3.jpg" alt="" /></span></div>
        <?php
         foreach ($productos as $producto)
         {
           echo('<div class="contenedor"><span class="imagen fit"><img src="imagenes/'.$producto['Imagen'].'"'.'alt="" /><ul class="mas centrado"><li><a href="#" class="boton alt">AGREGAR</a></li></ul></span></div>');
         }
         ?>
      </div>
    </div>
    </section>
  <div class="" style="padding-top:20px;display:block;clear:both">
    <h4>POST VENTA &amp; GARANTIA</h4>
    <p><span class="image left"><img src="images/wall5.jpg" alt=""/></span>Contamos con el mejor servicio POST-VENTA, ademas de nuestro preciado Garage de Servicio Tecnico,
    al cual podes acercarte cuando gustes y acceder al mejor service de bicicletas del pais. Ademas, obtene tu presupuesto sin cargo para
  renovar tu equipo y/o realizar una puesta a punto de todos sus componentes. No dudes en consultarnos por estos servicios. Reserva un turno ahora mismo
  y asegurate un lugar en nuestro Garage.</p>
    <p><span class="image right"><img src="images/wall6.jpg" alt="" /></span>Todos las bicicletas de London Bikes cuentan con 2 años de Garantia Oficial.
    Durante el primer año tenes bonificados todos los service para tener siempre a punto tu Bicicleta!</p>
  </div>
</div>
</section>
