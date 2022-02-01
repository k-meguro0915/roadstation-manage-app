<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadstationUrls extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'CID',
        'web',
        'twitter',
        'facebook',
        'instagram',
        'other'
    ];
}
