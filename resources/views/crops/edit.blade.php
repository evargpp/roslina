<x-app-layout>

  <x-ui.action-bar :title="__('crops.edit.title')" :subtitle="__('crops.edit.subtitle')">
    <x-ui.back-button :action="route('crops.index')" :name="__('crops.button.back.name')" :alt="__('crops.button.back.alt')" />
    <x-ui.save-button :action="route('crops.update', $crop)" :name="__('crops.button.save.name')" :alt="__('crops.button.save.alt')" formname="form_edit" />
    <x-ui.preview-button :action="route('crops.show', $crop)" :name="__('crops.button.preview.name')" :alt="__('crops.button.preview.alt')" />
    <x-ui.delete-button :action="route('crops.destroy', $crop->id)" :name="__('crops.button.delete.name')" :alt="__('crops.button.delete.alt')" :confirm="__('crops.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('crops.update', $crop) }}" id="form_edit">
      @csrf
      @method('PUT')

      @include('crops._form', ['crop' => $crop])
    </form>

  </div>
</x-app-layout>
