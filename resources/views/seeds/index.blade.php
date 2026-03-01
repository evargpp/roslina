<x-app-layout>

  <x-ui.action-bar :title="__('seeds.index.title')" subtitle="{{ __('seeds.index.subtitle') }}">
    <x-ui.new-button :action="route('seeds.create')" :name="__('seeds.button.new.name')" :alt="__('seeds.button.new.alt')" />
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
          <th class="p-2 border">{{ __('seeds.index.table.species_name') }}</th>
          <th class="p-2 border">{{ __('seeds.index.table.producer_name') }}</th>
          <th class="p-2 border">{{ __('seeds.index.table.quantity') }}</th>
          <th class="p-2 border">{{ __('seeds.index.table.expires_at') }}</th>
          <th class="p-2 border">{{ __('seeds.index.table.actions') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($seeds as $seed)

          <tr>
            <td class="p-2 border">
              <a href="{{ route('seeds.show', $seed) }}" class="text-blue-600">{{ $seed->species->name }}</a>
            </td>
            <td class="p-2 border">{{ $seed->producer->name }}</td>
            <td class="p-2 border">{{ $seed->quantity }} {{ $seed->unit->name }}</td>
            <td class="p-2 border">{{ $seed->expires_at }}</td>
            <td class="p-2 border space-x-2">
              <a href="{{ route('seeds.edit', $seed) }}"
                class="text-blue-600">{{ __('seeds.index.table.edit') }}</a>

              <form method="POST" action="{{ route('seeds.destroy', $seed) }}" class="inline"
                onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  {{ __('seeds.index.table.delete') }}
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-4">
      {{ $seeds->links() }}
    </div>
  </div>

  <script>
    function confirmDelete(form) {
      return confirm('{{ __('species.button.delete.confirm') }}');
    }
  </script>
</x-app-layout>
