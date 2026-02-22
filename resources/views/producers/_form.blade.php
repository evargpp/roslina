<form method="POST"
      action="{{ isset($producer)
                ? route('producers.update', $producer)
                : route('producers.store') }}">

    @csrf
    @isset($producer)
        @method('PUT')
    @endisset

    <div class="mb-4">
        <label class="block mb-1">Nazwa</label>
        <input type="text"
               name="name"
               value="{{ old('name', $producer->name ?? '') }}"
               class="w-full border rounded p-2">
        @error('name') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div class="mb-4">
        <label class="block mb-1">NIP</label>
        <input type="text"
               name="nip"
               value="{{ old('nip', $producer->nip ?? '') }}"
               class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Email</label>
        <input type="email"
               name="email"
               value="{{ old('email', $producer->email ?? '') }}"
               class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Telefon</label>
        <input type="text"
               name="phone"
               value="{{ old('phone', $producer->phone ?? '') }}"
               class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Notatki</label>
        <textarea name="notes"
                  class="w-full border rounded p-2">{{ old('notes', $producer->notes ?? '') }}</textarea>
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Zapisz
    </button>
</form>
