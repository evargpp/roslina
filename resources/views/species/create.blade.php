<x-app-layout>

  <x-ui.action-bar :title="__('species.create.title')" :subtitle="__('species.create.subtitle')">
    <x-ui.back-button :action="route('species.index')" :name="__('species.button.back.name')" :alt="__('species.button.back.alt')" />
    <x-ui.save-button :action="route('species.store')" :name="__('species.button.save.name')" :alt="__('species.button.save.alt')" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ route('species.store') }}"
      id="form_create">
      @csrf
      @include('species._form', ['species' => null])
    </form>
  </div>
</x-app-layout>
