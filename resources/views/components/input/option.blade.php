@props([
'id',
'name',
'label',
'value',
'type',
])

<div class="flex items-center">
    <input 
        id="{{ $id }}" 
        name="{{ $name }}" 
        type="{{ $type }}"
        value="{{ $value }}"
        class="w-4 h-4 text-gray-600 border-gray-300 focus:ring-gray-500">
    <label 
        for="{{ $id }}" 
        class="block ml-3 text-sm font-medium text-gray-700">
        {{ $label }}
    </label>
</div>