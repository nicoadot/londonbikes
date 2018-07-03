<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasFrecuentesController extends Controller
{
  public function index(){
    $view = view('preguntasFrecuentes');
    return $view;
  }
}
