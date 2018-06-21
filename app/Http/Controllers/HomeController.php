<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {

    $listado = [
        'Algo',
        'Otra Cosa',
        'La ultima'
    ];
    $view = view('home');
    $view->with('lista',$listado);
    return view('home');
  }
    //metodo debe ser public
}
