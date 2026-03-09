<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    /** @use HasFactory<\Database\Factories\CropFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'latin_name',
        'desc',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function seeds()
    {
        return $this->hasMany(Seed::class);
    }

    public function producers()
    {
        return $this->hasManyThrough(Producer::class, Seed::class);
    }
}
