<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Dodaj producenta</h2>
    </x-slot>

    <div class="bg-white shadow rounded p-6">
        @include('producers._form')
    </div>
</x-app-layout>
