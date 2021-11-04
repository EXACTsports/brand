@props([
'id',
'name',
'placeholder' => '',
'rows' => '3',
])

<textarea 
    id="{{ $id }}" 
    name="{{$name}}" 
    placeholder="{{$placeholder}}"
    rows="{{ $rows }}"
    
    {{ $attributes->merge(['class' => 'focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border border-gray-300 rounded-md']) }}>
</textarea>