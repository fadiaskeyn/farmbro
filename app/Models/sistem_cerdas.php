<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sistem_cerdas extends Model
{
    use HasFactory;
    public $fillable = [
        "status_keputusan",
    ];
}
