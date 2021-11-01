@php
[$classes] = match(config('brand.brand', 'exact')) {
'exact' => ['text-white bg-bright-orange hover:bg-gray-900 hover:text-gray-100'],
'spect8' => ['border border-bright-orange text-bright-orange bg-white hover:bg-bright-orange hover:text-white'],
};
@endphp

<x-bcl::button {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</x-bcl::button>