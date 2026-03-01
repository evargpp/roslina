<x-app-layout>
  <x-ui.action-bar :title="__('producers.show.title')" :subtitle="__('producers.show.subtitle')">
    <x-ui.back-button :action="route('producers.index')" :name="__('producers.button.back.name')" :alt="__('producers.button.back.alt')" />
    <x-ui.new-button :action="route('producers.seeds.create', $producer)" :name="__('producers.button.new_seed.name')" :alt="__('producers.button.new_seed.alt')" />
    <x-ui.edit-button :action="route('producers.edit', $producer->id)" :name="__('producers.button.edit.name')" :alt="__('producers.button.edit.alt')" />
    <x-ui.delete-button :action="route('producers.destroy', $producer->id)" :name="__('producers.button.delete.name')" :alt="__('producers.button.delete.alt')" :confirm="__('producers.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">
    <div class="mb-4">
      <p><span class="font-semibold">{{ __('producers.show.name') }}:</span> {{ $producer->name }}</p>
      <p><span class="font-semibold">{{ __('producers.show.nip') }}:</span> {{ $producer->nip }}</p>
      <p><span class="font-semibold">{{ __('producers.show.phone') }}:</span> {{ $producer->phone }}</p>
      <p><span class="font-semibold">{{ __('producers.show.www') }}:</span> {{ $producer->www }}</p>
      <p><span class="font-semibold">{{ __('producers.show.email') }}:</span> {{ $producer->email }}</p>
      <p><span class="font-semibold">{{ __('producers.show.notes') }}:</span> {{ $producer->notes }}</p>
    </div>
  </div>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <table class="w-full border">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-2 border">{{ __('seeds.index.table.crop_name') }}</th>
          <th class="p-2 border">{{ __('seeds.index.table.quantity') }}</th>
          <th class="p-2 border">{{ __('seeds.index.table.expires_at') }}</th>
          <th class="p-2 border">{{ __('seeds.index.table.actions') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($seeds as $seed)
          <tr>
            <td class="p-2 border">
              <a href="{{ route('producers.seeds.show', ['producer' => $producer->id, 'seed' => $seed->id]) }}" class="text-blue-600">{{ $seed->crop->name }}</a>
            </td>
            <td class="p-2 border">{{ $seed->quantity }} {{ $seed->unit->name }}</td>
            <td class="p-2 border">{{ $seed->expires_at }}</td>
            <td class="p-2 border space-x-2">
              <a href="{{ route('producers.seeds.edit', ['producer' => $producer->id, 'seed' => $seed->id]) }}" class="text-blue-600">{{ __('seeds.index.table.edit') }}</a>

              <form method="POST" action="{{ route('producers.seeds.destroy', ['producer' => $producer->id, 'seed' => $seed->id]) }}" class="inline"
                onsubmit="return confirmDelete(this)">
                @csrf
                @method('DELETE')
                <button class="text-red-600">
                  {{ __('producer_seeds.index.table.delete') }}
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
      return confirm('{{ __('producer_seeds.button.delete.confirm') }}');
    }
  </script>

</x-app-layout>
