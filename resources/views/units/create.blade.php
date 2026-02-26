<x-app-layout>

  <x-ui.action-bar :title="__('units.create.title')" :subtitle="__('units.create.subtitle')">
    <x-ui.back-button :action="route('units.index')" :name="__('units.button.back.name')" :alt="__('units.button.back.alt')" />
    <x-ui.save-button :action="route('units.store')" :name="__('units.button.save.name')" :alt="__('units.button.save.alt')" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ isset($unit) ? route('units.update', $unit) : route('units.store') }}"
      id="form_create">
      @csrf
      @include('units._form', ['unit' => null])
    </form>
  </div>
</x-app-layout>
