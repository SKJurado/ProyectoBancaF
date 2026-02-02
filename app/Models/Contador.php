<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contador extends Model
{
    protected $table = 'contador';
    protected $primaryKey = 'vch_conttabla';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'vch_conttabla',
        'int_contitem',
        'int_contlongitud'
    ];
}

