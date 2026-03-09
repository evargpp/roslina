<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'notes' => $this->notes,
            'expires_at' => $this->expires_at,
            'acquired_at' => $this->acquired_at,
            'quantity' => $this->quantity,
            'unit' => $this->unit->symbol,
            'producer' => $this->producer->name,
            'crop' => $this->crop->name,
            ];
    }
}
