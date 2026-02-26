<x-app-layout>
  <x-ui.action-bar :title="__('units.show.title')" :subtitle="__('units.show.subtitle')">
    <x-ui.back-button :action="route('units.index')" :name="__('units.button.back.name')" :alt="__('units.button.back.alt')" />
    <x-ui.edit-button :action="route('units.edit', $unit->id)" :name="__('units.button.edit.name')" :alt="__('units.button.edit.alt')" />
    <x-ui.delete-button :action="route('units.destroy', $unit->id)" :name="__('units.button.delete.name')" :alt="__('units.button.delete.alt')" />
  </x-ui.action-bar>

  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">
    <div class="mb-4">
      <p><span class="font-semibold">{{ __('units.show.name') }}:</span> {{ $unit->name }}</p>
      <p><span class="font-semibold">{{ __('units.show.symbol') }}:</span> {{ $unit->symbol }}</p>
    </div>
  </div>
</x-app-layout>
