<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class employees extends Model
{
    protected $connection = 'mongodb'; 
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date'
    ];
    use HasFactory;
}