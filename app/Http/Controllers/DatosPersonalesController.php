<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosPersonalesController extends Controller
{
    public function datosPersonales(){
      return view('datosPersonales');
    }
}
