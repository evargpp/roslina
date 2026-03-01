<x-app-layout>

  <x-ui.action-bar :title="__('producers.index.title')" subtitle="{{ __('producers.index.subtitle') }}">
    <x-ui.new-button :action="route('producers.create')" :name="__('producers.button.new.name')" :alt="__('producers.button.new.alt')" />
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
          <th class="p-2 border">{{ __('producers.index.table.name') }}</th>
          <th class="p-2 border">{{ __('producers.index.table.www') }}</th>
          <th class="p-2 border">{{ __('producers.index.table.actions') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($producers as $producer)
          <tr>
            <td class="p-2 border">
              <a href="{{ route('producers.show', $producer) }}" class="text-blue-600">{{ $producer->name }}</a>
            </td>
            <td class="p-2 border">{{ $producer->www }}</td>
            <td class="p-2 border space-x-2">
              <a href="{{ route('producers.edit', $producer) }}" class="text-blue-600">{{ __('producers.index.table.edit') }}</a>

              <form method="POST" action="{{ route('producers.destroy', $producer) }}" class="inline"
                onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  {{ __('producers.index.table.delete') }}
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-4">
      {{ $producers->links() }}
    </div>
  </div>

  <script>
    function confirmDelete(form) {
      return confirm('{{ __('producers.button.delete.confirm') }}');
    }
  </script>
</x-app-layout>
