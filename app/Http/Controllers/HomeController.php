<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
    $view = view('home');
    return $view;
  }
    //metodo debe ser public
}
