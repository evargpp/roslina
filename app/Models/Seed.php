<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seed extends Model
{
    /** @use HasFactory<\Database\Factories\SeedFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'crop_id',
        'producer_id',
        'unit_id',
        'quantity',
        'expires_at',
        'notes',
        'user_id',
    ];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function producer(): BelongsTo
    {
        return $this->belongsTo(Producer::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
