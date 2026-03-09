<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    public function storeForCrop(Request $request, Crop $crop)
    {
        return $this->store($request, $crop);
    }

    public function storeForProducer(Request $request, Producer $producer)
    {
        return $this->store($request, $producer);
    }

    public function storeForAddress(Request $request, Address $address)
    {
        return $this->store($request, $address);
    }

    protected function store(Request $request, $model)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

        $model->images()->create([
            'path' => $path,
        ]);

        return back()->with('success', 'Zdjęcie dodane.');
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->path);
        $image->delete();

        return back()->with('success', 'Zdjęcie usunięte.');
    }
}
