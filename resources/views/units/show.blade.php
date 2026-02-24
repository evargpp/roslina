<x-app-layout>
  <x-ui.action-bar :title="'Jednostka miary'" :subtitle="'Szczegóły jednostki miary'">
    <x-ui.back-button :action="route('units.index')" name="Wróć" alt="Powrót do listy jednostek" />

    <x-ui.edit-button :action="route('units.edit', $unit->id)" name="" alt="Edycja jednostki" />
    <x-ui.delete-button :action="route('units.destroy', $unit->id)" name="" alt="Usuń jednostkę" />
  </x-ui.action-bar>

  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">
    <div class="mb-4">
      <p><span class="font-semibold">Name:</span> {{ $unit->name }}</p>
      <p><span class="font-semibold">Symbol:</span> {{ $unit->symbol }}</p>
    </div>
  </div>
</x-app-layout>
