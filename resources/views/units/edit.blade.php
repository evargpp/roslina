<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edytuj jednostkę</h2>
    </x-slot>

    <div class="bg-white shadow rounded p-6">
        @include('units._form', ['unit' => $unit])
    </div>
</x-app-layout>
