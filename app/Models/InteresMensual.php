<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InteresMensual extends Model
{
    protected $table = 'interesmensual';
    protected $primaryKey = 'chr_monecodigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'chr_monecodigo',
        'dec_inteimporte'
    ];
}

