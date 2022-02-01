<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadstation extends Model
{
    use HasFactory;
    protected $fillable = [
        'CID',
        'name',
        'name_furi',
        'thumbnail',
        'registry_year',
        'catch_copy',
        'introduction'
    ];
}
