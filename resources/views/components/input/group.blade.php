@props([
    'label',
    'for',
    'error' => false,
    'helpText' => false,
    'inline' => false,
])

@if($inline)
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
        <label for="{{ $for }}" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
            {{ $label }}
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            {{ $slot }}

            @if ($helpText)
                <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
            @endif
            @if ($error)
                <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
            @endif
        </div>
    </div>
@else
    <div class="sm:col-span-4">
        <label for="{{ $for }}" class="block text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
        <div class="flex mt-1 rounded-md">
            {{ $slot }}
        </div>

        @if ($helpText)
            <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
        @endif
        @if ($error)
            <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
        @endif
    </div>
@endif
