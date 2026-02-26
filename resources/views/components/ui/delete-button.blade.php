<form action="{{ $action }}" method="POST" onsubmit="return confirm('{{ $confirm }}');">
  @csrf
  @method('DELETE')

  <button type="submit"
    class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition">
    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#1f1f1f">
      <path
        d="M267.33-120q-27.5 0-47.08-19.58-19.58-19.59-19.58-47.09V-740H160v-66.67h192V-840h256v33.33h192V-740h-40.67v553.33q0 27-19.83 46.84Q719.67-120 692.67-120H267.33Zm425.34-620H267.33v553.33h425.34V-740Zm-328 469.33h66.66v-386h-66.66v386Zm164 0h66.66v-386h-66.66v386ZM267.33-740v553.33V-740Z" />
      <title> {{ $alt }} </title>
    </svg>
    @if ($name)
      <span class="text-sm font-medium text-gray-700">{{ $name }}</span>
    @endif

  </button>
</form>
