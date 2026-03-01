<x-app-layout>

  <x-ui.action-bar :title="__('producer_seeds.edit.title')" :subtitle="__('producer_seeds.edit.subtitle')">
    <x-ui.back-button :action="route('producers.show', $producer_back)" :name="__('producer_seeds.button.back.name')" :alt="__('producer_seeds.button.back.alt')" />
    <x-ui.save-button :action="route('producers.seeds.update', [$producer_back, $seed])" :name="__('producer_seeds.button.save.name')" :alt="__('producer_seeds.button.save.alt')" formname="form_edit" />
    <x-ui.preview-button :action="route('producers.seeds.show', [$producer_back, $seed])" :name="__('producer_seeds.button.preview.name')" :alt="__('producer_seeds.button.preview.alt')" />
    <x-ui.delete-button :action="route('producers.seeds.destroy', [$producer_back, $seed])" :name="__('producer_seeds.button.delete.name')" :alt="__('producer_seeds.button.delete.alt')" :confirm="__('seeds.button.delete.confirm')" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ route('producers.seeds.update', [$producer_back, $seed]) }}" id="form_edit">
      @csrf
      @method('PUT')

      @include('seeds._form', ['seed' => $seed])
    </form>

  </div>
</x-app-layout>
