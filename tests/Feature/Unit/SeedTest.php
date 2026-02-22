<?php

use App\Models\Seed;
use App\Models\Unit;
use App\Models\Producer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create seed with relations', function () {
    $user = User::factory()->create();
    $unit = Unit::factory()->create();
    $producer = Producer::factory()->create();

    $seed = Seed::factory()->create([
        'user_id' => $user->id,
        'unit_id' => $unit->id,
        'producer_id' => $producer->id,
    ]);

    expect($seed->user)->toBeInstanceOf(User::class);
    expect($seed->unit)->toBeInstanceOf(Unit::class);
    expect($seed->producer)->toBeInstanceOf(Producer::class);
});
