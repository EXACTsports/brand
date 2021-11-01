@props(['href'=>'#', 'color'=>'blue', 'icon'=>'', 'target'=>'_blank'])

@switch($color)
    @case('blue')
        @php ($colors = 'text-blue-600 hover:text-gray-900 active:text-gray-900')
        @break
    @case('logo-orange')
        @php ($colors = 'text-logo-orange hover:text-gray-900 active:text-gray-900')
        @break
	@case('bright-orange')
		@php ($colors = 'text-bright-orange hover:text-maroon active:text-gray-900')
        @break
    @case('maroon')
        @php ($colors = 'text-maroon hover:text-bright-orange active:text-bright-orange')
        @break
@endswitch

@switch($icon)
    @case('back')
        @php ($icon = "far fa-arrow-alt-circle-left")
        @break
    @case('ext')
        @php ($icon = "far fa-external-link-square-alt")
        @break
@endswitch

<a 
    href="{{ $href }}" 
    target="{{$target}}"
    {{ $attributes->merge(['class' => 'hover:underline '.$colors]) }}
    {{ $attributes->whereStartsWith('x-') }}
    {{ $attributes->thatStartWith('wire:') }} 
    >{{$slot}}</a>
<i class="{{$icon ?? ''}}"></i>