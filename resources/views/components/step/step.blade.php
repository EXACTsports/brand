@props(['step', 'status'])

@switch($status)
    @case('completed')
        @php ($anchorColours = 'border-bright-orange group hover:border-dark-gray')
        @php ($stepColours = 'group-hover:text-dark-gray text-bright-orange')
    @break
    
    @case('current')
        @php ($anchorColours = 'border-bright-orange')
        @php ($stepColours = 'text-bright-orange')
    @break

    @case('upcoming')
        @php ($anchorColours = 'border-gray-200 group hover:border-gray-300')
        @php ($stepColours = 'text-gray-500 group-hover:text-gray-700')
    @break
        
@endswitch

<li class="md:flex-1">
    <a href="#"
        class="flex flex-col py-2 pl-4 border-l-4 md:pl-0 md:pt-4 md:pb-0 md:border-l-0 md:border-t-4 {{$anchorColours}}">
        <span class="text-xs font-semibold tracking-wide uppercase {{$stepColours}}">Step {{$step}}</span>
        <span class="text-sm font-medium">{{$slot}}</span>
    </a>
</li>
