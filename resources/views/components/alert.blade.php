@props(['type', 'flag' => false, 'icon' => ''])

@switch($type)
    @case('success')
        @php
            $border = "border-green-400";
            $icon = "text-green-400";
            $background = "bg-green-50";
            $text = "text-green-800";
        @endphp
    @break
    @case('warning')
        @php
            $border = "border-yellow-400";
            $icon = "text-yellow-400";
            $background = "bg-yellow-50";
            $text = "text-yellow-800";
        @endphp
    @break
    @case('failure')
        @php
            $border = "border-red-400";
            $icon = "text-red-400";
            $background = "bg-red-50";
            $text = "text-red-800";
        @endphp
    @break
    @case('alert')
        @php
            $border = "border-black";
            $icon = "text-black";
            $background = "bg-gray-50";
            $text = "text-gray-900";
        @endphp
    @break
    @case('gray')
        @php
            $border = "border-gray-900";
            $icon = "text-gray-200";
            $background = "bg-dark-gray";
            $text = "text-gray-200";
        @endphp
    @break
    @case('orange')
        @php
            $border = "border-pale-orange";
            $icon = "text-white";
            $background = "bg-bright-orange";
            $text = "text-white";
        @endphp
    @break
@endswitch



<div {{ $attributes->merge(['class' => "p-4 border-l-4 $border $background"]) }}
    {{ $attributes->whereStartsWith('x-') }}
    {{ $attributes->thatStartWith('wire:') }}>
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="w-5 h-5 {{ $icon }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                @if($flag===true)
                <path fill-rule="evenodd"
                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                    clip-rule="evenodd"></path>
                @else
                @switch($type)
                @case('success')
                <!-- Heroicon name: solid/check-circle -->
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
                @break
                @case('warning')
                <!-- Heroicon name: solid/exclamation -->
                <path fill-rule="evenodd"
                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
                @break
                @case('failure')
                <!-- Heroicon name: solid/x-circle -->
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                    clip-rule="evenodd" />
                @break
                @case('alert')
                <!-- Heroicon name: exclamation -->
                <path fill-rule="evenodd"
                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
                @break
                @default
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
                @break
                @endswitch
                @endif
            </svg>
        </div>
        <div class="ml-3 {{ $text }}">
            {{ $slot }}
        </div>
    </div>
</div>