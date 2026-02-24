@if (!$disabled)
  <a href="{{ $action }}"
    class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition">
@endif
<svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#1f1f1f">
  <path d="M560.67-240 320-480.67l240.67-240.66L608-674 414.67-480.67 608-287.33 560.67-240Z" />
</svg>
@if ($name)
  <span class="text-sm font-medium text-gray-700">{{ $name }}</span>
@endif
@if (!$disabled)
  </a>
@endif
