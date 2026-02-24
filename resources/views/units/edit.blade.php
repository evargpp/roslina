<x-app-layout>

  <x-ui.action-bar :title="'Jednostki miary'" :subtitle="'Zarządzaj jednostkami miary'">
    <x-ui.back-button :action="route('units.index')" name="Wróć" alt="Powrót do listy jednostek" />

    <x-ui.save-button :action="route('units.update', $unit)" name="" alt="Zapisz jednostkę" formname="form_edit" />
    <x-ui.preview-button :action="route('units.show', $unit)" name="" alt="Podgląd jednostki miary" />
    <x-ui.delete-button :action="route('units.destroy', $unit->id)" name="" alt="Usuń jednostkę" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">

    @if (session('success'))
      <div class="mb-4 text-green-600">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="{{ isset($unit) ? route('units.update', $unit) : route('units.store') }}"
      id="form_edit">
      @csrf
      @method('PUT')

      @include('units._form', ['unit' => $unit])
    </form>

  </div>
</x-app-layout>
