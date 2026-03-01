<x-app-layout>

  <x-ui.action-bar :title="__('producers.edit.title')" :subtitle="__('producers.edit.subtitle')">
    <x-ui.back-button :action="route('producers.index')" :name="__('producers.button.back.name')" :alt="__('producers.button.back.alt')" />
    <x-ui.save-button :action="route('producers.update', $producer)" :name="__('producers.button.save.name')" :alt="__('producers.button.save.alt')" formname="form_edit" />
    <x-ui.preview-button :action="route('producers.show', $producer)" :name="__('producers.button.preview.name')" :alt="__('producers.button.preview.alt')" />
    <x-ui.delete-button :action="route('producers.destroy', $producer->id)" :name="__('producers.button.delete.name')" :alt="__('producers.button.delete.alt')" :confirm="__('producers.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('producers.update', $producer) }}" id="form_edit">
      @csrf
      @method('PUT')

      @include('producers._form', ['producer' => $producer])
    </form>

  </div>
</x-app-layout>
