<x-app-layout>

  <x-ui.action-bar :title="__('addresses.create.title')" :subtitle="__('addresses.create.subtitle')">
    <x-ui.back-button :action="route('addresses.index')" :name="__('addresses.button.back.name')" :alt="__('addresses.button.back.alt')" />
    <x-ui.save-button :action="route('addresses.store')" :name="__('addresses.button.save.name')" :alt="__('addresses.button.save.alt')" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ route('addresses.store') }}"
      id="form_create">
      @csrf
      @include('addresses._form', ['address' => null])
    </form>
  </div>
</x-app-layout>
