<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table = 'moneda';
    protected $primaryKey = 'chr_monecodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_monecodigo',
        'vch_monedescripcion'
    ];
}

