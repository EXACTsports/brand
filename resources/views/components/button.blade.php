@props(['icon' => ''])

<span class="inline-flex rounded-md shadow-sm">
    <button {{ $attributes->get('id') }}
        {{ $attributes->thatStartWith('wire:') }}
        {{ $attributes->thatStartWith('x-') }}
        {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'py-2 px-4 rounded-md font-medium transition duration-150 ease-in-out' .
        ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
        ]) }}
        >
        {{ $slot }}

        @switch($icon)
        @case('football')
        <i class="ml-1 fas fa-futbol"></i>
        @break
        @case('video')
        <i class="ml-1 fas fa-video"></i>
        @break
        @case('label')
        <i class="ml-1 fas fa-tag"></i>
        @break
        @case('share')
        <i class="ml-1 fas fa-share-square"></i>
        @break
        @case('upload')
        <i class="ml-1 fas fa-cloud-upload-alt"></i>
        @break
        @endswitch
    </button>
</span>