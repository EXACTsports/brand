@php
[$classes, $additional] = match(config('brand.brand', 'exact')) {
    'exact' => ['text-gray-100 bg-gray-700 hover:bg-bright-orange hover:text-white', 'exact'],
    'spect8' => ['text-white bg-bright-orange hover:bg-gray-900 hover:text-gray-100', 'spect8'],
};
@endphp

<button {{ $attributes->merge(['class' => $classes]) }} {{$additional}}>{{ $slot }}</button>