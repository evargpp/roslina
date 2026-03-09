<?php

namespace App\Http\Controllers;

use App\Models\crop;
use App\Http\Requests\StoreCropRequest;
use App\Http\Requests\UpdateCropRequest;

class CropController extends Controller
{
    public function index()
    {
        $crops = Crop::paginate(10);
        return view('crops.index', compact('crops'));
    }

    public function show(Crop $crop)
    {
        $crop->load(['images', 'seeds', 'seeds.producer', 'seeds.unit']);
        return view('crops.show', compact('crop'));
    }

    public function create()
    {
        return view('crops.create');
    }

    public function edit(Crop $crop)
    {
        return view('crops.edit', compact('crop'));
    }

    public function store(StoreCropRequest $request)
    {
        $crop = Crop::create($request->validated());

        return redirect()->route('crops.edit', $crop)
            ->with('success', __('crops.create.success'));
    }

    public function update(UpdateCropRequest $request, Crop $crop)
    {
        $crop->update($request->validated());

        return redirect()->route('crops.edit', $crop)
            ->with('success', __('crops.update.success'));
    }

    public function destroy(Crop $crop)
    {
        $crop->delete();

        return redirect()->route('crops.index')
            ->with('success', __('crops.destroy.success'));
    }
}
