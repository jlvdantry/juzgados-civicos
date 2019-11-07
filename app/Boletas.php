<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Boletas extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
'boleta_remision',
'placa1',
'areadeadscripcion_1',
'nombre_1',
'primer_apellido_1',
'segundo_apellido_1',
'placa2',
'areadeadscripcion_2',
'nombre_2',
'primer_apellido_2',
'segundo_apellido_2',
'id_mediotransporte_1',
'numerodepatrulla_1',
'id_mediotransporte_2',
'numerodepatrulla_2'
    ];
}
