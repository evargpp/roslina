@if (!$disabled)
  <a href="{{ $action }}"
    class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition">
@endif
<svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#1f1f1f">
  <path d="M521.33-480.67 328-674l47.33-47.33L616-480.67 375.33-240 328-287.33l193.33-193.34Z" />
</svg>
@if ($name)
  <span class="text-sm font-medium text-gray-700">{{ $name }}</span>
@endif
@if (!$disabled)
  </a>
@endif
