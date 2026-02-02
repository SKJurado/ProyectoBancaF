<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $primaryKey = 'chr_emplcodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_emplcodigo',
        'vch_emplpaterno',
        'vch_emplmaterno',
        'vch_emplnombre',
        'vch_emplciudad',
        'vch_empldireccion',
        'vch_emplusuario',
        'vch_emplclave'
    ];
}
