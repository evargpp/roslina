<x-app-layout>
  <x-ui.action-bar :title="__('species.show.title')" :subtitle="__('species.show.subtitle')">
    <x-ui.back-button :action="route('species.index')" :name="__('species.button.back.name')" :alt="__('species.button.back.alt')" />
    <x-ui.edit-button :action="route('species.edit', $species->id)" :name="__('species.button.edit.name')" :alt="__('species.button.edit.alt')" />
    <x-ui.delete-button :action="route('species.destroy', $species->id)" :name="__('species.button.delete.name')" :alt="__('species.button.delete.alt')" :confirm="__('species.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">
    <div class="mb-4">
      <p><span class="font-semibold">{{ __('species.show.name') }}:</span> {{ $species->name }}</p>
      <p><span class="font-semibold">{{ __('species.show.latin_name') }}:</span> {{ $species->latin_name }}</p>
      <p><span class="font-semibold">{{ __('species.show.desc') }}:</span> {{ $species->desc }}</p>
    </div>
  </div>
</x-app-layout>
