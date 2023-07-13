<?php

namespace App\Models;

use App\Models\komen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'image',
        'nama',
        'lpr',
        'lokasi',
        'tgl',
        'komen',

    ];

}