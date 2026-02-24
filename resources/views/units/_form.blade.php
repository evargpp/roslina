<div class="mb-4">
  <label class="block mb-1">Nazwa</label>
  <input type="text" name="name" value="{{ old('name', $unit->name ?? '') }}" class="w-full border rounded p-2">
  @error('name')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">Symbol</label>
  <input type="text" name="symbol" value="{{ old('symbol', $unit->symbol ?? '') }}"
    class="w-full border rounded p-2">
  @error('symbol')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>
