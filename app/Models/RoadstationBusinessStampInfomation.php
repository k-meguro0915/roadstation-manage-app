<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadstationBusinessStampInfomation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'CID',
        'installation_location',
        'start_time',
        'end_time'
    ];
}
