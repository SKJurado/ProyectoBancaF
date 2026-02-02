<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'chr_cliecodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_cliecodigo',
        'vch_cliepaterno',
        'vch_cliematerno',
        'vch_clienombre',
        'chr_cliedni',
        'vch_clieciudad',
        'vch_cliedireccion',
        'vch_clietelefono',
        'vch_clieemail'
    ];
}

