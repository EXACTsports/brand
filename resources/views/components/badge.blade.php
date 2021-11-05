@props(['color'=>'logo-orange'])

@switch($color)
    @case('logo-orange')
        @php ($colors = 'bg-logo-orange text-white')
        @break
    @case('bright-orange')
        @php ($colors = 'bg-bright-orange text-white')
        @break
    @case('maroon')
        @php ($colors = 'bg-maroon text-white')
        @break
    @case('dark-gray')
        @php ($colors = 'bg-dark-gray text-white')
        @break
    @case('pale-brown')
        @php ($colors = 'bg-pale-brown text-white')
        @break
    @case('beige')
        @php ($colors = 'bg-beige text-pale-brown')
        @break
@endswitch

<span 
    {{ $attributes->merge(['class' => 'inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium '.$colors]) }}
    {{ $attributes->whereStartsWith('x-') }}
    {{ $attributes->thatStartWith('wire:') }}>
    {{$slot}}
</span>