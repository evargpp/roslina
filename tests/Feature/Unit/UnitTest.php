<?php

use App\Models\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create unit', function () {
    $unit = Unit::factory()->create([
        'name' => 'pieces',
        'symbol' => 'pcs',
    ]);

    expect($unit)->toBeInstanceOf(Unit::class);
    expect($unit->symbol)->toBe('pcs');
});

it('symbol must be unique', function () {
    Unit::factory()->create([
        'symbol' => 'pcs',
    ]);

    expect(fn () => Unit::factory()->create([
        'symbol' => 'pcs',
    ]))->toThrow(\Illuminate\Database\QueryException::class);
});


