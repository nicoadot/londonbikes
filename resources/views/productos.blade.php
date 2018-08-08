@extends ('layouts.defaultBS')
@section('title')
  {{'Productos'}}
@endsection

<section id="bloquePrincipal">

  <div class="container" style="margin:0 auto">
    <h2>Productos</h2>
    <div class="col-8" style="margin:0 auto">
      <div class="list-group angosto">
        @foreach ($productos as $producto)
          <a  href="{{ route('productos.show', $producto->id)}}" class="list-group-item">{{$producto->descripcion}}<img style="float:right" width="70px"  src="<?php echo asset("storage/productos/$producto->avatar")?>"></a>
        @endforeach
        <div class="form-group row mb-0" style="margin-top:10px">
            <div class="col-md-6 offset-md-4">
                  <a style="padding:15px" href="{{ route('productos.create')}}" class="btn btn-primary">NUEVO PRODUCTO</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
