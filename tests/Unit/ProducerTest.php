<?php

use App\Models\Producer;

describe('Producer Model', function () {
    it('ma wypełnialne atrybuty', function () {
        $user = new Producer();

        expect($user->getFillable())->toContain('name', 'nip', 'phone', 'www', 'email', 'notes');
    });



    it('ma relację has many address', function () {
        $user = new Producer();

        expect($user->addresses())->toBeInstanceOf(Illuminate\Database\Eloquent\Relations\HasMany::class);
    });
});
