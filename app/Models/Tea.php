<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'type',
        'taille',
        'prix',
        'description',
        'url_image'
    ];
}
