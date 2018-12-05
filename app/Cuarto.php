<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuarto extends Model
{
    protected $table='cuartos';
    protected $fillable=['numero', 'descripcion', 'foto'];

    public function clientes() {

        return $this->belongsTo('App\Cliente', 'cuarto_id');
    }
}
