<?php

namespace App\Http\Controllers;

use App\Models\Species;
use App\Http\Requests\StoreSpeciesRequest;
use App\Http\Requests\UpdateSpeciesRequest;

class SpeciesController extends Controller
{
    public function index()
    {
        $species = Species::paginate(10);
        return view('species.index', compact('species'));
    }

    public function show(Species $species)
    {
        return view('species.show', compact('species'));
    }

    public function create()
    {
        return view('species.create');
    }

    public function edit(Species $species)
    {
        return view('species.edit', compact('species'));
    }

    public function store(StoreSpeciesRequest $request)
    {
        $species = Species::create($request->validated());

        return redirect()->route('species.edit', $species)
            ->with('success', __('species.create.success'));
    }

    public function update(UpdateSpeciesRequest $request, Species $species)
    {
        $species->update($request->validated());

        return redirect()->route('species.edit', $species)
            ->with('success', __('species.update.success'));
    }

    public function destroy(Species $species)
    {
        $species->delete();

        return redirect()->route('species.index')
            ->with('success', __('species.destroy.success'));
    }
}
