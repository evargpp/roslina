<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProducerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\SeedController;
use App\Http\Controllers\ProducerSeedController;
use App\Http\Controllers\CropController;
use App\Models\Crop;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('units', UnitController::class);
    Route::resource('addresses', AddressController::class);
    Route::resource('producers', ProducerController::class);

    Route::get('/producers/{producer}/seeds/create', [ProducerSeedController::class, 'create'])->name('producers.seeds.create');
    Route::post('/producers/{producer}/seeds', [ProducerSeedController::class, 'store'])->name('producers.seeds.store');
    Route::get('/producers/{producer}/seeds/edit/{seed}', [ProducerSeedController::class, 'edit'])->name('producers.seeds.edit');
    Route::put('/producers/{producer}/seeds/{seed}', [ProducerSeedController::class, 'update'])->name('producers.seeds.update');
    Route::delete('/producers/{producer}/seeds/{seed}', [ProducerSeedController::class, 'destroy'])->name('producers.seeds.destroy');
    Route::get('/producers/{producer}/seeds/{seed}', [ProducerSeedController::class, 'show'])->name('producers.seeds.show');

    Route::resource('crops', CropController::class);
    Route::resource('seeds', SeedController::class);
});
