<x-app-layout>

  <x-ui.action-bar :title="__('crops.create.title')" :subtitle="__('crops.create.subtitle')">
    <x-ui.back-button :action="route('crops.index')" :name="__('crops.button.back.name')" :alt="__('crops.button.back.alt')" />
    <x-ui.save-button :action="route('crops.store')" :name="__('crops.button.save.name')" :alt="__('crops.button.save.alt')" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ route('crops.store') }}"
      id="form_create">
      @csrf
      @include('crops._form', ['crop' => null])
    </form>
  </div>
</x-app-layout>
