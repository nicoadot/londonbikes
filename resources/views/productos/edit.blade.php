@extends('layouts.header')
@section('title')
  {{'Editar Producto'}}
@endsection

<div class="container" style="margin-top:30px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Producto') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('productos.update', $producto->id)}}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ $producto->descripcion }}" required autofocus>
                                @if ($errors->has('descripcion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="preciounitario" type="number" class="form-control{{ $errors->has('preciounitario') ? ' is-invalid' : '' }}" name="preciounitario" value="{{ $producto->preciounitario }}" required>

                                @if ($errors->has('preciounitario'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('preciounitario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>

                            <div class="col-md-6">
                              <select class="" name="idcategoria">
                                  @foreach ($categorias as $categoria)
                                    <option name="idcategoria" value="{{$categoria->id}}" {{ ($categoria->id == $producto->idcategoria) ? ' selected="selected"' : ''}}>{{$categoria->descripcion}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                            <div class="col-md-6">
                              <input type="file" name="avatar" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
