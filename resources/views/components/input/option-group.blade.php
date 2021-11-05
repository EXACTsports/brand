@props([
'inline' => '',
'label',
])
@if($inline)
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
        <p class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{ $label }}</p>
        <div class="mt-4 space-y-4">
            {{ $slot }}
        </div>
    </div>
@else
    <div class="sm:col-span-4">
        <p class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{ $label }}</p>
        <div class="mt-4 space-y-4">
            {{ $slot }}
        </div>
    </div>
@endif