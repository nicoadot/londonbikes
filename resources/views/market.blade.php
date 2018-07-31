@extends('layouts.defaultBS')
@section('title')
  {{'Market'}}
@endsection

<section id="bloquePrincipal">
  <div class="angosto">
    <header>
      <h1>MARKET!</h1>
      <p>Bienvenido <strong>{{ Auth::check() ?  Auth::user()->name : 'Visitante' }}</strong> al e-shop de London Bikes</p>
    </header>
  </div>
</section>
<div id="wrapper" class="angosto">
  <div id="sidebar">
	<h3>MI CARRITO</h3>
    <div id="cart">
    	<span class="empty">Vacio</span>
    </div>

    <h3>CATEGORIAS</h3>
    <div class="checklist categories">
    	<ul>
        @foreach ($categorias as $categoria)
        	<li><a href=""><span></span>{{$categoria->descripcion}}</a></li>
        @endforeach
      </ul>
    </div>
</div>
  <div id="grid" class="angosto">
    @foreach ($productos as $producto)
      <div class="product">
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="<?php echo asset("storage/productos/$producto->avatar")?>" alt="" />
                <div class="image_overlay"></div>
                <div class="add_to_cart">Agregar</div>
                <div class="stats">
                    <div class="stats-container">
                        <span class="product_price">${{$producto->preciounitario}}</span>
                        <span class="product_name">{{$producto->descripcion}}</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
