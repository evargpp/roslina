<x-app-layout>

  <x-ui.action-bar :title="__('producer_seeds.create.title')" :subtitle="__('producer_seeds.create.subtitle', ['name' => $producer->name])">
    <x-ui.back-button :action="route('seeds.index')" :name="__('producer_seeds.button.back.name')" :alt="__('producer_seeds.button.back.alt')" />
    <x-ui.save-button :action="route('seeds.store')" :name="__('producer_seeds.button.save.name')" :alt="__('producer_seeds.button.save.alt')" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ route('producers.seeds.store', $producer) }}" id="form_create">
      @csrf
      @include('seeds._form', ['seed' => null])
    </form>
  </div>
</x-app-layout>
