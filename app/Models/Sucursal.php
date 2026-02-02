<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursal';
    protected $primaryKey = 'chr_sucucodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_sucucodigo',
        'vch_sucunombre',
        'vch_sucuciudad',
        'vch_sucudireccion',
        'int_sucucontcuenta'
    ];
}

