<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::paginate(10);
        return view('addresses.index', compact('addresses'));
    }

    public function show(Address $address)
    {
        return view('addresses.show', compact('address'));
    }

    public function create()
    {
        return view('addresses.create');
    }

    public function edit(Address $address)
    {
        return view('addresses.edit', compact('address'));
    }

    public function store(StoreAddressRequest $request)
    {
        $address = Address::create($request->validated());

        return redirect()->route('addresses.edit', $address)
            ->with('success', __('addresses.create.success'));
    }

    public function update(UpdateAddressRequest $request, Address $address)
    {
        $address->update($request->validated());

        return redirect()->route('addresses.edit', $address)
            ->with('success', __('addresses.update.success'));
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->route('addresses.index')
            ->with('success', __('addresses.destroy.success'));
    }
}
