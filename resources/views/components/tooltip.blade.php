@props(['title' => '', 'abbr' => '', 'color' => 'light'])

<div 
    x-data="{ tooltip: false }" 
    x-on:mouseover="tooltip = true" 
    x-on:mouseleave="tooltip = false"
    class="cursor-pointer ">
    {{$abbr}}
    <div x-show="tooltip"
        class="absolute p-2 text-sm transform translate-x-0 translate-y-0 border rounded-lg  {{ $color === 'dark' ? 'bg-gray-800 border-gray-900 text-gray-100' : 'text-gray-800 bg-gray-50 border-gray-600'}}">
        <span class="font-medium">{{$title}}</span>
        <br />
        {{$slot}}
    </div>
</div>