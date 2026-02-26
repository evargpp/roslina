<x-app-layout>

  <x-ui.action-bar :title="__('addresses.index.title')" subtitle="{{ __('addresses.index.subtitle') }}">
    <x-ui.new-button :action="route('addresses.create')" :name="__('addresses.button.new.name')" :alt="__('addresses.button.new.alt')" />
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
          <th class="p-2 border">{{ __('addresses.index.table.country') }}</th>
          <th class="p-2 border">{{ __('addresses.index.table.city') }}</th>
          <th class="p-2 border">{{ __('addresses.index.table.postal_code') }}</th>
          <th class="p-2 border">{{ __('addresses.index.table.street') }}</th>
          <th class="p-2 border">{{ __('addresses.index.table.actions') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($addresses as $address)
          <tr>
            <td class="p-2 border">
              <a href="{{ route('addresses.show', $address) }}" class="text-blue-600">{{ $address->country }}</a>
            </td>
            <td class="p-2 border">{{ $address->city }}</td>
            <td class="p-2 border">{{ $address->postal_code }}</td>
            <td class="p-2 border">{{ $address->street }}</td>
            <td class="p-2 border space-x-2">
              <a href="{{ route('addresses.edit', $address) }}" class="text-blue-600">{{ __('addresses.index.table.edit') }}</a>

              <form method="POST" action="{{ route('addresses.destroy', $address) }}" class="inline"
                onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  {{ __('addresses.index.table.delete') }}
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-4">
      {{ $addresses->links() }}
    </div>
  </div>

  <script>
    function confirmDelete(form) {
      return confirm('{{ __('addresses.button.delete.confirm') }}');
    }
  </script>
</x-app-layout>
