<?php

use App\Models\Producer;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create producer', function () {
    $producer = Producer::factory()->create();

    expect($producer->name)->not->toBeEmpty();
    expect($producer->email)->toContain('@');
});
