<div class="mb-4">
  <label class="block mb-1">{{ __('crops.form.name.label') }}</label>
  <input type="text" name="name" value="{{ old('name', $crop->name ?? '') }}" class="w-full border rounded p-2">
  @error('name')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('crops.form.latin_name.label') }}</label>
  <input type="text" name="latin_name" value="{{ old('latin_name', $crop->latin_name ?? '') }}" class="w-full border rounded p-2">
  @error('latin_name')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('crops.form.desc.label') }}</label>
  <textarea name="desc" class="w-full border rounded p-2">{{ old('desc', $crop->desc ?? '') }}</textarea>
  @error('desc')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>
