<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_hand',
        'cpu_hand',
        'result',
        'created_at',
    ];
}
