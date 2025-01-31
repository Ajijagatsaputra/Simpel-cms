<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbinganBelajar extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "address",
        "city",
        "phone",
        "course_type",
        "price_range",
    ];
}
