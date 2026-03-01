<x-app-layout>

  <x-ui.action-bar :title="__('species.edit.title')" :subtitle="__('species.edit.subtitle')">
    <x-ui.back-button :action="route('species.index')" :name="__('species.button.back.name')" :alt="__('species.button.back.alt')" />
    <x-ui.save-button :action="route('species.update', $species)" :name="__('species.button.save.name')" :alt="__('species.button.save.alt')" formname="form_edit" />
    <x-ui.preview-button :action="route('species.show', $species)" :name="__('species.button.preview.name')" :alt="__('species.button.preview.alt')" />
    <x-ui.delete-button :action="route('species.destroy', $species->id)" :name="__('species.button.delete.name')" :alt="__('species.button.delete.alt')" :confirm="__('species.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('species.update', $species) }}" id="form_edit">
      @csrf
      @method('PUT')

      @include('species._form', ['species' => $species])
    </form>

  </div>
</x-app-layout>
