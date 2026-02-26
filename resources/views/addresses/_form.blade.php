<div class="mb-4">
  <label class="block mb-1">{{ __('addresses.form.street.label') }}</label>
  <input type="text" name="street" value="{{ old('street', $address->street ?? '') }}" class="w-full border rounded p-2">
  @error('street')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('addresses.form.city.label') }}</label>
  <input type="text" name="city" value="{{ old('city', $address->city ?? '') }}" class="w-full border rounded p-2">
  @error('city')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('addresses.form.postal_code.label') }}</label>
  <input type="text" name="postal_code" value="{{ old('postal_code', $address->postal_code ?? '') }}" class="w-full border rounded p-2">
  @error('postal_code')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('addresses.form.country.label') }}</label>
  <input type="text" name="country" value="{{ old('country', $address->country ?? '') }}" class="w-full border rounded p-2">
  @error('country')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>
