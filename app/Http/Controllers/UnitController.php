<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;

class UnitController extends Controller
{
    // Lista jednostek
    public function index()
    {
        $units = Unit::paginate(10);
        return view('units.index', compact('units'));
    }

    // Pojedyncza jednostka
    public function show(Unit $unit)
    {
        return view('units.show', compact('unit'));
    }

    // Formularz tworzenia
    public function create()
    {
        return view('units.create');
    }

    // Zapis nowej jednostki
    public function store(StoreUnitRequest $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'symbol' => 'required|string|max:10|unique:units,symbol',
        ]);

        Unit::create($data);

        return redirect()->route('units.index')
            ->with('success', 'Unit created successfully.');
    }

    // Formularz edycji
    public function edit(Unit $unit)
    {
        return view('units.edit', compact('unit'));
    }

    // Aktualizacja jednostki
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'symbol' => 'required|string|max:10|unique:units,symbol,' . $unit->id,
        ]);

        $unit->update($data);

        return redirect()->route('units.index')
            ->with('success', 'Unit updated successfully.');
    }

    // Usuwanie jednostki
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('units.index')
            ->with('success', 'Unit deleted successfully.');
    }
}
