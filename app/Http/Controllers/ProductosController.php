<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Producto;
class ProductosController extends Controller
{
    public function listarProductos(){
      $productos = Producto::all();
      $view = view('productos');
      return $view->with('productos',$productos);
    }
}
