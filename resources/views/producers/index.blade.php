<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Producenci</h2>
    </x-slot>

    <div class="bg-white shadow rounded p-6">

        @if(session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('producers.create') }}"
           class="rounded bg-red-600 px-3 py-2 text-sm text-white hover:bg-gray-900 mb-4 inline-block">
            Dodaj producenta
        </a>

        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">Nazwa</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Telefon</th>
                    <th class="p-2 border">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach($producers as $producer)
                    <tr>
                        <td class="p-2 border">{{ $producer->name }}</td>
                        <td class="p-2 border">{{ $producer->email }}</td>
                        <td class="p-2 border">{{ $producer->phone }}</td>
                        <td class="p-2 border space-x-2">
                            <a href="{{ route('producers.edit', $producer) }}" class="text-blue-600">Edytuj</a>

                            <form method="POST"
                                  action="{{ route('producers.destroy', $producer) }}"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">
                                    Usuń
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $producers->links() }}
        </div>
    </div>
</x-app-layout>
