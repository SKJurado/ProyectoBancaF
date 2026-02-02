<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignado extends Model
{
    protected $table = 'asignado';
    protected $primaryKey = 'chr_asigcodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_asigcodigo',
        'chr_sucucodigo',
        'chr_emplcodigo',
        'dtt_asigfechaalta',
        'dtt_asigfechabaja'
    ];
}

