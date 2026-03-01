<x-app-layout>
  <x-ui.action-bar :title="__('producers.show.title')" :subtitle="__('producers.show.subtitle')">
    <x-ui.back-button :action="route('producers.index')" :name="__('producers.button.back.name')" :alt="__('producers.button.back.alt')" />
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
</x-app-layout>
