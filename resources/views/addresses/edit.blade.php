<x-app-layout>

  <x-ui.action-bar :title="__('addresses.edit.title')" :subtitle="__('addresses.edit.subtitle')">
    <x-ui.back-button :action="route('addresses.index')" :name="__('addresses.button.back.name')" :alt="__('addresses.button.back.alt')" />
    <x-ui.save-button :action="route('addresses.update', $address)" :name="__('addresses.button.save.name')" :alt="__('addresses.button.save.alt')" formname="form_edit" />
    <x-ui.preview-button :action="route('addresses.show', $address)" :name="__('addresses.button.preview.name')" :alt="__('addresses.button.preview.alt')" />
    <x-ui.delete-button :action="route('addresses.destroy', $address->id)" :name="__('addresses.button.delete.name')" :alt="__('addresses.button.delete.alt')" :confirm="__('addresses.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('addresses.update', $address) }}" id="form_edit">
      @csrf
      @method('PUT')

      @include('addresses._form', ['address' => $address])
    </form>

  </div>
</x-app-layout>
