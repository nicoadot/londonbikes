
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/styles.css" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="" href="/css/font-awesome.min.css">
    <title>London Bikes - @yield('title')</title>
  </head>
  <body>
    <header id="header">
      <div class="angosto">
        <a href="{{url('/home')}}" class="logo">London Bikes</a>
        <nav id="nav">
          <a href="{{url('/home')}}" style="text-decoration:underline">Home</a>
          <a href="{{url('/nosotros')}}">Nosotros</a>
          <a href="{{url('/market')}}">Market</a>
          <a href="{{url('/login')}}">Acceder</a>
        </nav>

      </div>
    </header>
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    <section >
      <div class="angosto">
          @yield('contenido')
      </div>
    </section>
     <section id="footer">
       <div class="angosto" style="top:0">
         <div class="" style="margin:0 auto">
           <ul>
             <li align="center"><a href="{{url('/preguntasFrecuentes')}}"> F.A.Q.</a></li>
           </ul>
         </div>
         <div class="" style="margin:0 auto">
           <ul class="icons" align="center">
             <li><a href="https://twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
             <li><a href="https://facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
             <li><a href="https://instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
             <li><a href="https://github.com" class="icon fa-github"><span class="label">Github</span></a></li>
             <li><a href="https://tumblr.com" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
           </ul>
         </div>
       </div>
     </section>
  </body>
</html>
