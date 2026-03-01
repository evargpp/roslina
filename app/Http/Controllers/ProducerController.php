<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducerRequest;
use App\Http\Requests\UpdateProducerRequest;
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

    public function show(Producer $producer)
    {
        $seeds = $producer->seeds()
            ->with(['crop', 'unit'])
            ->orderBy('name')
            ->paginate(10);

        return view('producers.show', compact('producer', 'seeds'));
    }

    public function create(Request $request)
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

    public function update(UpdateProducerRequest $request, Producer $producer)
    {
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
