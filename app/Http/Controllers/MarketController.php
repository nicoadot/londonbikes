<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Producto;
use  App\Models\Categoria;
class MarketController extends Controller
{
  /**
   * Create a new controller instance.
   *
   */
    public function listarProductos(){
      $productos = Producto::paginate(6);
      $categorias = Categoria::all()->sortBy("descripcion");
      $view = view('market');
      return $view->with('productos',$productos)->with('categorias',$categorias);
    }
}
