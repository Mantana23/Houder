<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'tbmitra';
    protected $fillable = 
        ['nama',                    
         'email',
         'alamat',
         'kabupaten',
         'provinsi',
         'no_telp'
    ];
}
