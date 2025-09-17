<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'rating', 'review'];

    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;
}
