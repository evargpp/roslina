<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::paginate(10);
        return view('units.index', compact('units'));
    }

    public function show(Unit $unit)
    {
        return view('units.show', compact('unit'));
    }

    public function create()
    {
        return view('units.create');
    }

    public function edit(Unit $unit)
    {
        return view('units.edit', compact('unit'));
    }

    public function store(StoreUnitRequest $request)
    {
        $unit = Unit::create($request->validated());

        return redirect()->route('units.edit', $unit)
            ->with('success', __('units.create.success'));
    }

    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $unit->update($request->validated());

        return redirect()->route('units.edit', $unit)
            ->with('success', __('units.update.success'));
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('units.index')
            ->with('success', __('units.destroy.success'));
    }
}
