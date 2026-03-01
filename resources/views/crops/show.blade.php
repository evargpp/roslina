<x-app-layout>
  <x-ui.action-bar :title="__('crops.show.title')" :subtitle="__('crops.show.subtitle')">
    <x-ui.back-button :action="route('crops.index')" :name="__('crops.button.back.name')" :alt="__('crops.button.back.alt')" />
    <x-ui.edit-button :action="route('crops.edit', $crop->id)" :name="__('crops.button.edit.name')" :alt="__('crops.button.edit.alt')" />
    <x-ui.delete-button :action="route('crops.destroy', $crop->id)" :name="__('crops.button.delete.name')" :alt="__('crops.button.delete.alt')" :confirm="__('crops.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">
    <div class="mb-4">
      <p><span class="font-semibold">{{ __('crops.show.name') }}:</span> {{ $crop->name }}</p>
      <p><span class="font-semibold">{{ __('crops.show.latin_name') }}:</span> {{ $crop->latin_name }}</p>
      <p><span class="font-semibold">{{ __('crops.show.desc') }}:</span> {{ $crop->desc }}</p>
    </div>
  </div>
</x-app-layout>
