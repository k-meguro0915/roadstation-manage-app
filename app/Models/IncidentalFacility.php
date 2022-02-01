<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentalFacility extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'CID',
        'facility_id',
    ];
}
