@extends( 'layouts.defaultBS' )

@section('title')
  {{'Home'}}
@endsection
<section id="banner">
  <div class="angosto">
    <h1 style="color:#B33C3F">LONDON BIKES:<br />
      <span> BICICLETAS PARA CAMBIAR EL MUNDO</span>
    </h1>
  </div>
</section>
<section id="bloque1">
  <div class="angosto">
    <header>
      <h2>LONDON BIKES</h2>
    </header>
    <p>
      <strong>Amamos las bicicletas</strong>
      , pensamos en bicicletas, hacemos bicicletas y soñamos con ellas.
       Es por ello que buscamos hacer aún más ecológico un transporte que ya
       de por sí lo es y a partir de ese sueño queremos <strong>Promover la idea de que la sustentabilidad y la conciencia ecológica</strong>
       no solo son deberes y/u obligaciones de cada individuo, sino que también,
       mediante la inteligencia aplicada al diseño, se puede lograr un mayor acercamiento
       de personas a dichos principios a través del placer, el gusto o la diversión
       proporcionada por elementos de uso cotidianos, nunca desprovistos de componentes funcionales,
        lúdicos o didácticos. A los términos eco-friendly y eco-geek sumamos el eco-fun.
    </p>
    <ul class="mas">
      <li><a  href="{{url('/nosotros')}}" class="boton alt">MAS INFO.</a></li>
    </ul>
  </div>
</section>
