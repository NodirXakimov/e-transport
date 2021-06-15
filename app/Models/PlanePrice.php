<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanePrice extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'regionFrom', 'regionTo'];
    
}
