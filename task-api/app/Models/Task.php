<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    protected $attributes = [
        'completed' => false,
        'text' => '',
    ];

    protected $fillable = ['completed','text'];

    protected $casts=[
        'completed' => 'boolean',
    ];
}
