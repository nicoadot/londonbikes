@extends('layouts.defaultBS')
@section('title')
  {{'Nosotros'}}
@endsection
<section id="bloque1" >
  <div class="container">
      <h2>NOSOTROS!</h2>
      <div id="slider" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
    </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="imagenes/wall8.jpg"  width="100%" height="50%">
    </div>
    <div class="carousel-item">
    <img src="imagenes/wall9.jpg"  width="100%" height="50%">
    </div>
    <div class="carousel-item">
    <img src="imagenes/wall10.jpg"  width="100%" height="50%">
    </div>
  </div>

  <a class="carousel-control-prev" href="#slider" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider" data-slide="next">
  <span class="carousel-control-next-icon"></span>
  </a>
</div>

  <div >
    <header>
      <h2>Los que amamos las bicicletas!</h2>
    </header>
    <p>Pedaleamos por diversión. Pedaleamos por deporte. Pedaleamos para ir de aquí para allá, para liberarnos de la rutina diaria y para hacer de nuestro mundo un lugar mejor a través de las bicicletas. A veces pedaleamos sin ninguna razón en absoluto.
    Pedaleamos porque amamos cómo al movernos en bicicleta se crea una brisa fresca en una mañana y por cómo, después de un largo día de trabajo, al subir a una bicicleta nos hace sentir como si el día recién comenzara. Pedaleamos para que nuestros niños puedan disfrutar del simple placer de las aventuras en dos ruedas por el barrio. Pedaleamos para hacer los lugares conocidos nuevos otra vez.
    </p>
    <p>Ya somos <strong><span id="spanUsuarios"></span></strong> miembros!</p>
    <strong><p>	www.pleopleforbikes.org</p></strong>
    <p>Proporcionamos un frente unificado para la defensa de ciclismo a nivel nacional, un centro estratégico para asegurar la colaboración entre cada pieza en el movimiento de andar en bicicleta, y la capacidad de soportar los esfuerzos locales a través de nuestros recursos financieros, la comunidad y la comunicación.</p>
  </div>
  <script src="/js/last.js">

  </script>
</section>
