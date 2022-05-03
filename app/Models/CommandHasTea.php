<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandHasTea extends Model
{
    use HasFactory;

    protected $fillable = [
        'command_id',
        'tea_id'
    ];
}
