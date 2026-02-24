<div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4">

    <div class="flex items-center justify-between">

        <!-- Lewa strona (tytuł / breadcrumbs) -->
        <div>
            <h2 class="text-lg font-semibold text-gray-800">
                {{ $title }}
            </h2>
            <p class="text-sm text-gray-500">
                {{ $subtitle }}
            </p>
        </div>

        <!-- Prawa strona (akcje) -->
        <div class="flex items-center gap-2">

            {{ $slot }}

        </div>
    </div>

</div>
