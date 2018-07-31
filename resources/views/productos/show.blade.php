@extends('layouts.header')
@section('title')
  {{'Nuevo Producto'}}
@endsection
<div class="container" style="margin-top:30px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Producto') }}</div>
                  <div class="card-body">
                    <form action="{{ route('productos.destroy', $producto->id)}}" method="POST">
                      @csrf
                      {{ method_field('DELETE') }}
                      <input name="_method" type="hidden" value="DELETE">
                      <div class="form-group row" style="margin:0 auto;padding-bottom:20px">
                          <div class="col-md8"  style="margin:0 auto">
                            <img style="align:center" width="200px" src="<?php echo asset("storage/productos/$producto->avatar")?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
                          <div class="col-md-6">
                              <input disabled id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ $producto->descripcion }}" required autofocus>
                              @if ($errors->has('descripcion'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('descripcion') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                          <div class="col-md-6">
                              <input disabled id="preciounitario" type="number" class="form-control{{ $errors->has('preciounitario') ? ' is-invalid' : '' }}" name="preciounitario" value="{{ $producto->preciounitario }}" required>

                              @if ($errors->has('preciounitario'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('preciounitario') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>
                          <div class="col-md-6">
                            <select disabled  name="idcategoria">
                                @foreach ($categorias as $categoria)
                                  <option name="idcategoria" value="{{$categoria->id}}" {{ ($categoria->id == $producto->idcategoria) ? ' selected="selected"' : ''}}>{{$categoria->descripcion}}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label  class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
                          <div class="col-md-6">
                            <input disabled type="text" name="avatar" value="{{$producto->avatar}}">
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <a style="padding:15px" href="{{ route('productos.edit', $producto->id)}}" class="btn btn-primary">{{ __('EDITAR') }}</a>
                              <button type="submit" class="btn btn-danger">
                                  {{ __('Eliminar') }}
                              </button>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
