<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function seeds(): HasMany
    {
        return $this->hasMany(Seed::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
