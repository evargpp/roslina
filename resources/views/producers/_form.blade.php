<div class="mb-4">
  <label class="block mb-1">{{ __('producers.form.name.label') }}</label>
  <input type="text" name="name" value="{{ old('name', $producer->name ?? '') }}" class="w-full border rounded p-2">
  @error('name')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('producers.form.nip.label') }}</label>
  <input type="text" name="nip" value="{{ old('nip', $producer->nip ?? '') }}"
    class="w-full border rounded p-2">
  @error('nip')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('producers.form.phone.label') }}</label>
  <input type="text" name="phone" value="{{ old('phone', $producer->phone ?? '') }}"
    class="w-full border rounded p-2">
  @error('phone')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('producers.form.www.label') }}</label>
  <input type="text" name="www" value="{{ old('www', $producer->www ?? '') }}"
    class="w-full border rounded p-2">
  @error('www')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('producers.form.email.label') }}</label>
  <input type="text" name="email" value="{{ old('email', $producer->email ?? '') }}"
    class="w-full border rounded p-2">
  @error('email')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>

<div class="mb-4">
  <label class="block mb-1">{{ __('producers.form.notes.label') }}</label>
  <input type="text" name="notes" value="{{ old('notes', $producer->notes ?? '') }}"
    class="w-full border rounded p-2">
  @error('notes')
    <div class="text-red-600">{{ $message }}</div>
  @enderror
</div>
