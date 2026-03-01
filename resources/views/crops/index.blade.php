<x-app-layout>

  <x-ui.action-bar :title="__('crops.index.title')" subtitle="{{ __('crops.index.subtitle') }}">
    <x-ui.new-button :action="route('crops.create')" :name="__('crops.button.new.name')" :alt="__('crops.button.new.alt')" />
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
          <th class="p-2 border">{{ __('crops.index.table.name') }}</th>
          <th class="p-2 border">{{ __('crops.index.table.latin_name') }}</th>
          <th class="p-2 border">{{ __('crops.index.table.actions') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($crops as $crop)
          <tr>
            <td class="p-2 border">
              <a href="{{ route('crops.show', $crop) }}" class="text-blue-600">{{ $crop->name }}</a>
            </td>
            <td class="p-2 border">{{ $crop->latin_name }}</td>
            <td class="p-2 border space-x-2">
              <a href="{{ route('crops.edit', $crop) }}"
                class="text-blue-600">{{ __('crops.index.table.edit') }}</a>

              <form method="POST" action="{{ route('crops.destroy', $crop) }}" class="inline"
                onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  {{ __('crops.index.table.delete') }}
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-4">
      {{ $crops->links() }}
    </div>
  </div>

  <script>
    function confirmDelete(form) {
      return confirm('{{ __('crops.button.delete.confirm') }}');
    }
  </script>
</x-app-layout>
