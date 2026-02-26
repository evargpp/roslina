<a href="{{ $action }}"
  class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition">
  <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#1f1f1f">
    <path d="m287-446.67 240 240L480-160 160-480l320-320 47 46.67-240 240h513v66.66H287Z" />
    <title> {{ $alt }} </title>
  </svg>
  @if ($name)
    <span class="text-sm font-medium text-gray-700">{{ $name }}</span>
  @endif
</a>
