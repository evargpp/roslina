<x-app-layout>
  <x-ui.action-bar :title="__('addresses.show.title')" :subtitle="__('addresses.show.subtitle')">
    <x-ui.back-button :action="route('addresses.index')" :name="__('addresses.button.back.name')" :alt="__('addresses.button.back.alt')" />
    <x-ui.edit-button :action="route('addresses.edit', $address->id)" :name="__('addresses.button.edit.name')" :alt="__('addresses.button.edit.alt')" />
    <x-ui.delete-button :action="route('addresses.destroy', $address->id)" :name="__('addresses.button.delete.name')" :alt="__('addresses.button.delete.alt')" :confirm="__('addresses.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">
    <div class="mb-4">
      <p><span class="font-semibold">{{ __('addresses.show.country') }}:</span> {{ $address->country }}</p>
      <p><span class="font-semibold">{{ __('addresses.show.city') }}:</span> {{ $address->city }}</p>
      <p><span class="font-semibold">{{ __('addresses.show.postal_code') }}:</span> {{ $address->postal_code }}</p>
      <p><span class="font-semibold">{{ __('addresses.show.street') }}:</span> {{ $address->street }}</p>
    </div>
  </div>
</x-app-layout>
