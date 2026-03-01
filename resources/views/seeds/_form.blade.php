<div class="mb-4">
  <label class="block mb-1">{{ __('seeds.form.name.label') }}</label>
  <input type="text" name="name" value="{{ old('name', $seed->name ?? '') }}" class="w-full border rounded p-2">
  @error('name')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

{{-- CROP --}}
@if ($crop)
  <input type="hidden" name="crop_id" value="{{ $crop->id }}">
@else
  <div>
    <label>{{ __('seeds.form.crop.label') }}</label>
    <select name="crop_id">
      <option value="">-- select crop --</option>
      @foreach ($crops as $item)
        <option value="{{ $item->id }}" @selected(old('crop_id', $seed->crop_id ?? null) == $item->id)>
          {{ $item->name }}
        </option>
      @endforeach
    </select>
    @error('crop_id')
      <div class="text-red-600">{{ $message }}</div>
    @enderror
  </div>
@endif

{{-- PRODUCER --}}
@if ($producer)
  <input type="hidden" name="producer_id" value="{{ $producer->id }}">
@else
  <div>
    <label>{{ __('seeds.form.producer.label') }}</label>
    <select name="producer_id">
      <option value="">-- select producer --</option>
      @foreach ($producers as $item)
        <option value="{{ $item->id }}" @selected(old('producer_id', $seed->producer_id ?? null) == $item->id)>
          {{ $item->name }}
        </option>
      @endforeach
    </select>
    @error('producer_id')
      <div class="text-red-600">{{ $message }}</div>
    @enderror
  </div>
@endif

{{-- QUANTITY + UNIT --}}
<div>
  <label>{{ __('seeds.form.quantity.label') }}</label>
  <input type="number" step="1" name="quantity" value="{{ old('quantity', $seed->quantity ?? '0') }}">

  <select name="unit_id">
    @foreach ($units as $unit)
      <option value="{{ $unit->id }}" @selected(old('unit_id', $seed->unit_id ?? null) == $unit->id)>
        {{ $unit->symbol }}
      </option>
    @endforeach
  </select>

  @error('quantity')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
  @error('unit_id')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

{{-- EXPIRES --}}
<div>
  <label>{{ __('seeds.form.expires_at.label') }}</label>
  <input type="date" name="expires_at" value="{{ old('expires_at', $seed->expires_at ?? '') }}">
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('seeds.form.desc.label') }}</label>
  <textarea name="desc" class="w-full border rounded p-2">{{ old('desc', $seed->desc ?? '') }}</textarea>
  @error('desc')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>
