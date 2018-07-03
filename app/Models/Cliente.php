<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    public function datosPersonales(){
      return $this->belongsTo('App/Models/DetalleCliente','IdCliente','IdCliente');
    }
}
