<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    protected $table = 'tipomovimiento';
    protected $primaryKey = 'chr_tipocodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_tipocodigo',
        'vch_tipodescripcion',
        'vch_tipoaccion',
        'vch_tipoestado'
    ];
}

