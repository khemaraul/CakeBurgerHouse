<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;
    //protected $table = 'some_table';
    protected $casts = [
        'extras' => 'array'
    ];
}
