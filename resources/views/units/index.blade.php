<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold">Jednostki miary</h2>
  </x-slot>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <a href="{{ route('units.create') }}"
      class="rounded bg-red-600 px-3 py-2 text-sm text-white hover:bg-gray-900 mb-4 inline-block">
      Dodaj jednostkę miary
    </a>

    <table class="w-full border">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-2 border">Nazwa</th>
          <th class="p-2 border">Symbol</th>
          <th class="p-2 border">Akcje</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($units as $unit)
          <tr>
            <td class="p-2 border">
                <a href="{{ route('units.show', $unit) }}" class="text-blue-600">{{ $unit->name }}</a>
                </td>
            <td class="p-2 border">{{ $unit->symbol }}</td>
            <td class="p-2 border space-x-2">
              <a href="{{ route('units.edit', $unit) }}" class="text-blue-600">Edytuj</a>

              <form method="POST" action="{{ route('units.destroy', $unit) }}" class="inline" onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  Usuń
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-4">
      {{ $units->links() }}
    </div>
  </div>

  <script>
    function confirmDelete(form) {
      return confirm('Czy na pewno chcesz usunąć tę jednostkę?');
    }
  </script>
</x-app-layout>
