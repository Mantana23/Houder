<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Tanya extends Model
{
    protected $table = 'tbtanya';
    protected $fillable = 
    [
        'email',
        'pertanyaan'
    ];
}
