<form method="POST"
  action="{{ isset($unit) ? route('units.update', $unit) : route('units.store') }}">

  @csrf
  @isset($unit)
    @method('PUT')
  @endisset

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

  <button class="rounded bg-red-600 px-3 py-2 text-sm text-white hover:bg-gray-900 mb-4 inline-block">
    Zapisz
  </button>
</form>
