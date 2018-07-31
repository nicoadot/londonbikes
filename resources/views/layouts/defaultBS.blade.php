<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles_bs.css" />
    <link rel="stylesheet" href="/css/styles3.css" />
    <link rel="stylesheet" href="/css/styleProductos.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>London Bikes - @yield('title')</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/productos.js"></script>
    <script>
    $( function() {
      $( "#accordion" ).accordion({
        collapsible: true
      });
      $('.myCarousel').carousel()
    } );
  </script>
  <style>
   .carousel-inner img {
       width: 100%;
       height: 100%;
   }
 </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top up" role="navigation">
        <div class="container">
            <a class="navbar-brand logo" href="{{url('/home')}}">London Bikes</a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                &#9776;
            </button>
            <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                <ul class="nav navbar-nav">
                    @guest
                      <li class="nav-item"><a href="{{url('/home')}}" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="{{url('/nosotros')}}" class="nav-link">Nosotros</a></li>
                      <li class="nav-item"><a href="{{url('/market')}}" class="nav-link">Market</a></li>
                    @else
                      <li class="nav-item"><a href="{{url('/home')}}" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="{{url('/nosotros')}}" class="nav-link">Nosotros</a></li>
                      <li class="nav-item"><a href="{{url('/market')}}" class="nav-link">Market</a></li>
                      @if ( Auth::user()->isAdmin == 1 )
                      <li class="nav-item"><a href="{{url('/productos')}}" class="nav-link">Productos</a></li>
                      @endif
                    @endguest
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a  style="color:white" class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                        </li>
                        <li class="nav-item">
                            <a  style="color:white" class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{url('/perfil')}}">
                                    {{ __('Mi Perfil') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <footer class="footer-distributed">

			<div class="footer-left">

				<h3 class="logo">London<span >Bikes</span></h3>

				<p class="footer-links">
					<a href="{{url('/home')}}">Home</a>
					·
					<a href="{{url('/nosotros')}}">Nosotros</a>
					·
					<a href="{{url('/preguntasFrecuentes')}}">F.A.Q.</a>
					·
					<a href="{{url('/market')}}">Market</a>
					·
					<a href="{{url('/register')}}">Registrarse</a>
				</p>

				<p class="footer-company-name">London Bikes © 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Calle SiempreViva 123</span> Springfield, London</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 666 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:contacto@londonbikes.com">contacto@londonbikes.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Redes</span>
          Buscanos!
				</p>

				<div class="footer-icons">

					<a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="http://twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a>
					<a href="http://github.com"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
  </body>
</html>
