<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcard extends Model
{
    protected $fillable = [
        'cod',
        'dateEmission',
        'user_id',
        'credits',
        'mcard_type_id'
    ];

    protected $table = 'mcard'; //Deixa singular

    use HasFactory;
}
