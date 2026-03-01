<x-app-layout>

  <x-ui.action-bar :title="__('seeds.create.title')" :subtitle="__('seeds.create.subtitle')">
    <x-ui.back-button :action="route('seeds.index')" :name="__('seeds.button.back.name')" :alt="__('seeds.button.back.alt')" />
    <x-ui.save-button :action="route('seeds.store')" :name="__('seeds.button.save.name')" :alt="__('seeds.button.save.alt')" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ route('seeds.store') }}" id="form_create">
      @csrf
      @include('seeds._form', ['seed' => null])
    </form>
  </div>
</x-app-layout>
