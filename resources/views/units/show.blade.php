<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold">Szczegóły jednostki miary</h2>
  </x-slot>


  <div class="max-w-3xl mx-auto p-6 bg-white shadow rounded mt-6">

    <div class="flex gap-2 mt-6">
      <x-back-button :action="route('units.index')" name="Back to list" alt="Back to list" />
      <x-edit-button :action="route('units.edit', $unit->id)" name="Edit unit" alt="Edit unit" />
      <x-delete-button :action="route('units.destroy', $unit->id)" alt="Delete unit" />
    </div>

    <div class="mb-4">
      <p><span class="font-semibold">Name:</span> {{ $unit->name }}</p>
      <p><span class="font-semibold">Symbol:</span> {{ $unit->symbol }}</p>
    </div>
  </div>
</x-app-layout>
