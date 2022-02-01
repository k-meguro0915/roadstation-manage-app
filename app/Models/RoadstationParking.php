<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadstationParking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'CID',
        'learge_parking_number',
        'middle_parking_number',
        'disabilities_parking_number'
    ];
}
