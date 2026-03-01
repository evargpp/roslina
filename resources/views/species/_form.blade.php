<div class="mb-4">
  <label class="block mb-1">{{ __('species.form.name.label') }}</label>
  <input type="text" name="name" value="{{ old('name', $species->name ?? '') }}" class="w-full border rounded p-2">
  @error('name')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('species.form.latin_name.label') }}</label>
  <input type="text" name="latin_name" value="{{ old('latin_name', $species->latin_name ?? '') }}" class="w-full border rounded p-2">
  @error('latin_name')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('species.form.desc.label') }}</label>
  <textarea name="desc" class="w-full border rounded p-2">{{ old('desc', $species->desc ?? '') }}</textarea>
  @error('desc')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>
