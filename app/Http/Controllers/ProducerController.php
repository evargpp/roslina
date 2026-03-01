<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducerRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Producer;
use Illuminate\Http\Request;
use App\Services\ProducerService;
use Illuminate\Support\Facades\Session;
use Exception;

class ProducerController extends Controller
{
    public function index()
    {
        $producers = Producer::paginate(10);
        return view('producers.index', compact('producers'));
    }

    public function show(int $id)
    {
        $producer = Producer::findOrFail($id);
        return view('producers.show', compact('producer'));
    }

    public function create()
    {
        return view('producers.create');
    }

    public function edit(int $id)
    {
        $producer = Producer::findOrFail($id);
        return view('producers.edit', compact('producer'));
    }

    public function store(StoreProducerRequest $request)
    {
        $producer = Producer::create($request->validated());

        return redirect()->route('producers.edit', $producer)
            ->with('success', __('producers.create.success'));
    }

    public function update(UpdateAddressRequest $request, int $id)
    {
        $producer = Producer::findOrFail($id);
        $producer->update($request->validated());

        return redirect()->route('producers.edit', $producer)
            ->with('success', __('producers.update.success'));
    }

    public function destroy(int $id)
    {
        $producer = Producer::findOrFail($id);
        $producer->delete();

        return redirect()->route('producers.index')
            ->with('success', __('producers.destroy.success'));
    }
}
