<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $table = 'parametro';
    protected $primaryKey = 'chr_paracodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_paracodigo',
        'vch_paradescripcion',
        'vch_paravalor',
        'vch_paraestado'
    ];
}

