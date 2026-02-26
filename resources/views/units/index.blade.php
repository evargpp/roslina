<x-app-layout>

  <x-ui.action-bar :title="__('units.index.title')" subtitle="{{ __('units.index.subtitle') }}">
    <x-ui.new-button :action="route('units.create')" :name="__('units.button.new.name')" :alt="__('units.button.new.alt')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <table class="w-full border">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-2 border">{{ __('units.index.table.name') }}</th>
          <th class="p-2 border">{{ __('units.index.table.symbol') }}</th>
          <th class="p-2 border">{{ __('units.index.table.actions') }}</th>
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
              <a href="{{ route('units.edit', $unit) }}" class="text-blue-600">{{ __('units.index.table.edit') }}</a>

              <form method="POST" action="{{ route('units.destroy', $unit) }}" class="inline"
                onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  {{ __('units.index.table.delete') }}
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
      return confirm('{{ __('button.delete.confirm') }}');
    }
  </script>
</x-app-layout>
