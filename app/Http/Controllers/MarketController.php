<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Producto;
class MarketController extends Controller
{
    public function controlLogin(){
      return view('market');
    }

    public function listarProductos(){
      $productos = Producto::all();
      $view = view('market');
      return $view->with('productos',$productos);
    }
}
