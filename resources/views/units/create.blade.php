<x-app-layout>

  <x-ui.action-bar :title="'Jednostki miary'" :subtitle="'Zarządzaj jednostkami miary'">
    <x-ui.back-button :action="route('units.index')" name="Wróć" alt="Powrót do listy jednostek" />

    <x-ui.save-button :action="route('units.store')" name="" alt="Zapisz jednostkę" formname="form_create" />
  </x-ui.action-bar>

  <div class="bg-white shadow rounded p-6">
    <form method="POST" action="{{ isset($unit) ? route('units.update', $unit) : route('units.store') }}"
      id="form_create">
      @csrf
      @include('units._form', ['unit' => null])
    </form>
  </div>
</x-app-layout>
