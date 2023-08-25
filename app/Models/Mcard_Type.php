<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcard_Type extends Model
{
    protected $fillable = [
        'type',
    ];
    protected $table = 'mcard_types';
    use HasFactory;
}
