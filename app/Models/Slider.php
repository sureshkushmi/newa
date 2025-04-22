<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    // Add fillable property for mass assignment
    protected $fillable = [
        'title', 
        'image', 
        'description',
    ];
}
