<x-app-layout>

  <x-ui.action-bar :title="__('seeds.edit.title')" :subtitle="__('seeds.edit.subtitle')">
    <x-ui.back-button :action="route('seeds.index')" :name="__('seeds.button.back.name')" :alt="__('seeds.button.back.alt')" />
    <x-ui.save-button :action="route('seeds.update', $seed)" :name="__('seeds.button.save.name')" :alt="__('seeds.button.save.alt')" formname="form_edit" />
    <x-ui.preview-button :action="route('seeds.show', $seed)" :name="__('seeds.button.preview.name')" :alt="__('seeds.button.preview.alt')" />
    <x-ui.delete-button :action="route('seeds.destroy', $seed->id)" :name="__('seeds.button.delete.name')" :alt="__('seeds.button.delete.alt')" :confirm="__('seeds.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('seeds.update', $seed) }}" id="form_edit">
      @csrf
      @method('PUT')

      @include('seeds._form', ['seed' => $seed])
    </form>

  </div>
</x-app-layout>
