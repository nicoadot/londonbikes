<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';



    public function categoria(){

      //belongsTO dice que el producto tiene un atributo idcategoria que a
      //apunta a la tabla idcategoria
      return $this->belongsTo('App/Models/Categoria','IdCategoria','IdProducto');
    }
}
