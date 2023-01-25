<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    // nuestra tabla 

    protected $fillable=[
        'numero',
        'nombre',
        'codigo',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->numero = $model->NumeroSiguente();
            $model->nombre = 'Pry-'.$model->NumeroSiguente();
        });
    }

    public function scopeNumeroSiguente()
    {
        // consulatr el ultimo proyecto ingresado y va obtener el numero
        $orden = $this->select('numero')->latest('id')->first();
        if ($orden) {
            $ordenNumeroGenerado = $orden->numero + 1;
        } else {
            $ordenNumeroGenerado = 1;
        }
        return $ordenNumeroGenerado;
    }
}
