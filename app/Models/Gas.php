<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gas extends Model
{
        use HasFactory;
        public $fillable = [
            "amonia",
            "temperature",
            "humidity"
        ];
}
