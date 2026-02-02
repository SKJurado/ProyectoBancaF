<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuenta';
    protected $primaryKey = 'chr_cuencodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_cuencodigo',
        'chr_monecodigo',
        'chr_sucucodigo',
        'chr_emplcreacuenta',
        'chr_cliecodigo',
        'dec_cuensaldo',
        'dtt_cuenfechacreacion',
        'vch_cuenestado',
        'int_cuencontmov',
        'chr_cuenclave'
    ];
}

