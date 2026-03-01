<x-app-layout>

  <x-ui.action-bar :title="__('producers.create.title')" :subtitle="__('producers.create.subtitle')">
    <x-ui.back-button :action="route('producers.index')" :name="__('producers.button.back.name')" :alt="__('producers.button.back.alt')" />
    <x-ui.save-button :action="route('producers.store')" :name="__('producers.button.save.name')" :alt="__('producers.button.save.alt')" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ route('producers.store') }}" id="form_create">
      @csrf
      @include('producers._form', ['producer' => null])
    </form>
  </div>
</x-app-layout>
