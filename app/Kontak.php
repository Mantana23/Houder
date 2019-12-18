<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'tbkontak';
    protected $fillable = 
        ['nama',                    
         'email',
         'deskripsi'
    ];
}
