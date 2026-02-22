<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProducerService;
use Illuminate\Support\Facades\Session;
use Exception;

class ProducerController extends Controller
{
    protected ProducerService $service;

    public function __construct(ProducerService $service)
    {
        $this->service = $service;
    }

    // Lista producentów
    public function index()
    {
        $producers = $this->service->listProducers();
        return view('producers.index', compact('producers'));
    }

    // Widok dodawania nowego producenta
    public function create()
    {
        return view('producers.create');
    }

    // Zapis nowego producenta
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'address.street' => 'required|string',
            'address.city' => 'required|string',
            'address.postcode' => 'required|string',
            'address.country' => 'required|string',
        ]);

        try {
            $this->service->registerProducer($data);
            return redirect()->route('producers.index')
                             ->with('success', 'Producer created successfully!');
        } catch (Exception $e) {
            return redirect()->back()
                             ->withInput()
                             ->withErrors(['name' => $e->getMessage()]);
        }
    }

    // Widok edycji producenta
    public function edit(int $id)
    {
        $producer = $this->service->getProducer($id);
        if (!$producer) {
            return redirect()->route('producers.index')
                             ->withErrors(['producer' => 'Producer not found']);
        }

        return view('producers.edit', compact('producer'));
    }

    // Aktualizacja producenta
    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'address.street' => 'sometimes|string',
            'address.city' => 'sometimes|string',
            'address.postcode' => 'sometimes|string',
            'address.country' => 'sometimes|string',
        ]);

        try {
            $this->service->updateProducer($id, $data);
            return redirect()->route('producers.index')
                             ->with('success', 'Producer updated successfully!');
        } catch (Exception $e) {
            return redirect()->back()
                             ->withInput()
                             ->withErrors(['producer' => $e->getMessage()]);
        }
    }

    // Widok pojedynczego producenta
    public function show(int $id)
    {
        $producer = $this->service->getProducer($id);
        if (!$producer) {
            return redirect()->route('producers.index')
                             ->withErrors(['producer' => 'Producer not found']);
        }

        return view('producers.show', compact('producer'));
    }

    // Usuwanie producenta
    public function destroy(int $id)
    {
        try {
            $this->service->deleteProducer($id);
            return redirect()->route('producers.index')
                             ->with('success', 'Producer deleted successfully!');
        } catch (Exception $e) {
            return redirect()->route('producers.index')
                             ->withErrors(['producer' => $e->getMessage()]);
        }
    }
}
