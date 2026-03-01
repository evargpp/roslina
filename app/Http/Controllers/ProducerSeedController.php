<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seed;
use App\Models\Producer;
use App\Http\Requests\StoreSeedRequest;
use App\Http\Requests\UpdateSeedRequest;

class ProducerSeedController extends Controller
{
    public function show(Seed $seed)
    {
        return view('seeds.show', compact('seed'));
    }

    public function create(Request $request, Producer $producer)
    {
        return view('producer_seeds.create', [
            'crops' => \App\Models\Crop::orderBy('name')->get(),
            'crop' => null,
            'units' => \App\Models\Unit::orderBy('name')->get(),
            'producer' => $producer,
        ]);
    }

    public function edit(Producer $producer, Seed $seed)
    {
        return view('producer_seeds.edit', [
            'seed' => $seed,
            'crops' => \App\Models\Crop::orderBy('name')->get(),
            'crop' => null,
            'producers' => \App\Models\Producer::orderBy('name')->get(),
            'producer' => null,
            'units' => \App\Models\Unit::orderBy('name')->get(),
            'producer_back' => $producer,
        ]);
    }

    public function store(StoreSeedRequest $request, Producer $producer)
    {
        $seed = Seed::create([
            ...$request->validated(),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('producers.seeds.edit', [$producer, $seed])
            ->with('success', __('seeds.create.success'));
    }

    public function update(UpdateSeedRequest $request, Producer $producer, Seed $seed)
    {
        $seed->update($request->validated());

        return redirect()->route('producers.seeds.edit', [$producer, $seed])
            ->with('success', __('seeds.update.success'));
    }

    public function destroy(Producer $producer, Seed $seed)
    {
        $seed->delete();

        return redirect()->route('producers.show', $producer)
            ->with('success', __('seeds.destroy.success'));
    }
}
