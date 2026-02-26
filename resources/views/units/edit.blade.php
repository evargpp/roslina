<x-app-layout>

  <x-ui.action-bar :title="__('units.edit.title')" :subtitle="__('units.edit.subtitle')">
    <x-ui.back-button :action="route('units.index')" :name="__('units.button.back.name')" :alt="__('units.button.back.alt')" />
    <x-ui.save-button :action="route('units.update', $unit)" :name="__('units.button.save.name')" :alt="__('units.button.save.alt')" formname="form_edit" />
    <x-ui.preview-button :action="route('units.show', $unit)" :name="__('units.button.preview.name')" :alt="__('units.button.preview.alt')" />
    <x-ui.delete-button :action="route('units.destroy', $unit->id)" :name="__('units.button.delete.name')" :alt="__('units.button.delete.alt')" :confirm="__('units.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('units.update', $unit) }}" id="form_edit">
      @csrf
      @method('PUT')

      @include('units._form', ['unit' => $unit])
    </form>

  </div>
</x-app-layout>
