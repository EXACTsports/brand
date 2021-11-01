@php
[$classes] = match(config('brand.brand', 'exact')) {
    'exact' => ['text-gray-100 bg-gray-700 hover:bg-bright-orange hover:text-white'],
    'spect8' => ['text-white bg-bright-orange hover:bg-gray-900 hover:text-gray-100'],
};
@endphp

<x-bcl::button {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</x-bcl::button>