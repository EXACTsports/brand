@props(['icon'])

<a href="#" class="hover:text-bright-orange">
    @switch($icon)
        @case('football')
            <i {{ $attributes->merge(['class' => 'fas fa-futbol']) }}></i>
        @break
        @case('edit')
            <i {{ $attributes->merge(['class' => 'fas fa-pencil-alt']) }}></i>
        @break
        @case('delete')
            <i {{ $attributes->merge(['class' => 'fas fa-trash-alt']) }}></i>
        @break
        @case('share')
            <i {{ $attributes->merge(['class' => 'fas fa-share-square']) }}></i>
        @break
        @case('label')
            <i {{ $attributes->merge(['class' => 'fas fa-tag']) }}></i>
        @break
    @endswitch
</a>