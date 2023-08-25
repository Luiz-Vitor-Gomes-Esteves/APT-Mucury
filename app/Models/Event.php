<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'time',
        'local',
        'description',
        'causality_id',
        'route_id',
        'bus_id',
        'date'
    ];
    use HasFactory;
}
