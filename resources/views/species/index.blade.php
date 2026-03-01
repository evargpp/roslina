<x-app-layout>

  <x-ui.action-bar :title="__('species.index.title')" subtitle="{{ __('species.index.subtitle') }}">
    <x-ui.new-button :action="route('species.create')" :name="__('species.button.new.name')" :alt="__('species.button.new.alt')" />
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
          <th class="p-2 border">{{ __('species.index.table.name') }}</th>
          <th class="p-2 border">{{ __('species.index.table.latin_name') }}</th>
          <th class="p-2 border">{{ __('species.index.table.actions') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($species as $speciesOne)
          <tr>
            <td class="p-2 border">
              <a href="{{ route('species.show', $speciesOne) }}" class="text-blue-600">{{ $speciesOne->name }}</a>
            </td>
            <td class="p-2 border">{{ $speciesOne->latin_name }}</td>
            <td class="p-2 border space-x-2">
              <a href="{{ route('species.edit', $speciesOne) }}"
                class="text-blue-600">{{ __('species.index.table.edit') }}</a>

              <form method="POST" action="{{ route('species.destroy', $speciesOne) }}" class="inline"
                onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  {{ __('species.index.table.delete') }}
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-4">
      {{ $species->links() }}
    </div>
  </div>

  <script>
    function confirmDelete(form) {
      return confirm('{{ __('species.button.delete.confirm') }}');
    }
  </script>
</x-app-layout>
