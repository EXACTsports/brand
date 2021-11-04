@props([
'id',
'name',
'value',
])

<input 
    type="checkbox" 
    id="{{ $id }}" 
    name="{{ $name }}" 
    value="{{ $value }}"
    {{ $attributes->merge(['class' => 'w-4 h-4 text-gray-600 border-gray-300 rounded focus:ring-gray-500']) }}/>

