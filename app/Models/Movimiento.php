<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = 'movimiento';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'chr_cuencodigo',
        'int_movinumero',
        'dtt_movifecha',
        'chr_emplcodigo',
        'chr_tipocodigo',
        'dec_moviimporte',
        'chr_cuenreferencia'
    ];
}
