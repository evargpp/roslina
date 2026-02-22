<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    /** @use HasFactory<\Database\Factories\ProducerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'nip',
        'phone',
        'www',
        'email',
        'notes',
    ];
}
