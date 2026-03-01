<?php

namespace App\Http\Controllers;

use App\Models\Seed;
use App\Http\Requests\StoreSeedRequest;
use App\Http\Requests\UpdateSeedRequest;

class SeedController extends Controller
{
    public function index()
    {
        $seeds = \App\Models\Seed::query()
        ->with(['crop', 'producer', 'unit'])
        ->where('user_id', auth()->id())
        ->orderBy('name')
        ->paginate(10);

        return view('seeds.index', compact('seeds'));
    }

    public function show(Seed $seed)
    {
        return view('seeds.show', compact('seed'));
    }

    public function create()
    {
        return view('seeds.create', [
            'crops' => \App\Models\Crop::orderBy('name')->get(),
            'producers' => \App\Models\Producer::orderBy('name')->get(),
            'units' => \App\Models\Unit::orderBy('name')->get(),
            'crop' => null,
            'producer' => null,
        ]);
    }

    public function edit(Seed $seed)
    {
        return view('seeds.edit', [
            'seed' => $seed,
            'crops' => \App\Models\Crop::orderBy('name')->get(),
            'producers' => \App\Models\Producer::orderBy('name')->get(),
            'units' => \App\Models\Unit::orderBy('name')->get(),
            'crop' => null,
            'producer' => null,
        ]);
    }

    public function store(StoreSeedRequest $request)
    {
        $seed = Seed::create([
            ...$request->validated(),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('seeds.edit', $seed)
            ->with('success', __('seeds.create.success'));
    }

    public function update(UpdateSeedRequest $request, Seed $seed)
    {
        $seed->update($request->validated());

        return redirect()->route('seeds.edit', $seed)
            ->with('success', __('seeds.update.success'));
    }

    public function destroy(Seed $seed)
    {
        $seed->delete();

        return redirect()->route('seeds.index')
            ->with('success', __('seeds.destroy.success'));
    }
}
