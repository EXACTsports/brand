<nav aria-label="Progress">
    <ol role="list" class="space-y-4 md:flex md:space-y-0 md:space-x-8">
        @foreach ($steps as $key => $value)
            <x-step.step step="{{$key}}" status="{{ $current < $key ? 'upcoming' : ($current > $key ? 'completed' : 'current')}}">{{$value}}</x-step.step>
        @endforeach
    </ol>
</nav>