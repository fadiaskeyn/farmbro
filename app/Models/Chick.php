<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chick extends Model
{
    use HasFactory;
    public $fillable = [
        "amount",
        "chick_density",
    ];
}
