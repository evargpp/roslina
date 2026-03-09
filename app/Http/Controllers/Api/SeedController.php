<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seed;
use App\Http\Resources\SeedResource;

class SeedController extends Controller
{
    public function index()
    {
        return SeedResource::collection(Seed::all());
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Seed $seed)
    {
        return new SeedResource($seed);
    }


    public function update(Request $request, Seed $seed)
    {
        //
    }


    public function destroy(Seed $seed)
    {
        //
    }
}
