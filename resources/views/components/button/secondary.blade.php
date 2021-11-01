@php
[$classes, $additional] = match(config('brand.brand', 'exact')) {
'exact' => ['text-white bg-bright-orange hover:bg-gray-900 hover:text-gray-100', 'exact'],
'spect8' => ['border border-bright-orange text-bright-orange bg-white hover:bg-bright-orange hover:text-white', 'spect8'],
};
@endphp

<button {{ $attributes->merge(['class' => $classes]) }} {{$additional}}>{{ $slot }}</button>