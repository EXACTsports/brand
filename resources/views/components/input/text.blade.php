@props([
'id',
'name',
'placeholder' => '',
'type' => 'text',
])

<input 
    type="{{ $type }}" 
    id="{{ $id }}" 
    name="{{ $name }}" 
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'flex-1 block w-full focus:ring-gray-500 focus:border-gray-500 min-w-0 rounded sm:text-sm border-gray-300']) }}/>