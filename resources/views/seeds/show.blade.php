<x-app-layout>
  <x-ui.action-bar :title="__('seeds.show.title')" :subtitle="__('seeds.show.subtitle')">
    <x-ui.back-button :action="route('seeds.index')" :name="__('seeds.button.back.name')" :alt="__('seeds.button.back.alt')" />
    <x-ui.edit-button :action="route('seeds.edit', $seed->id)" :name="__('seeds.button.edit.name')" :alt="__('seeds.button.edit.alt')" />
    <x-ui.delete-button :action="route('seeds.destroy', $seed->id)" :name="__('seeds.button.delete.name')" :alt="__('seeds.button.delete.alt')" :confirm="__('seeds.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">
    <div class="mb-4">
      <p><span class="font-semibold">{{ __('seeds.show.name') }}:</span> {{ $seed->name }}</p>
      <p><span class="font-semibold">{{ __('seeds.show.species') }}:</span> {{ $seed->species->name }}</p>
      <p><span class="font-semibold">{{ __('seeds.show.producer') }}:</span> {{ $seed->producer->name }}</p>
      <p><span class="font-semibold">{{ __('seeds.show.quantity') }}:</span> {{ $seed->quantity }}
        {{ $seed->unit->symbol }}</p>
      <p><span class="font-semibold">{{ __('seeds.show.expires_at') }}:</span> {{ $seed->expires_at }}</p>
      <p><span class="font-semibold">{{ __('seeds.show.desc') }}:</span> {{ $seed->desc }}</p>
    </div>
  </div>
</x-app-layout>
