@php
[$classes, $tableClass, $headClass, $additional] = match(config('brand.brand', 'exact')) {
'exact' => ['min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg', 'min-w-full divide-y divide-gray-200', 'bg-gray-100', 'exact'],
'spect8' => ['align-middle min-w-full overflow-x-auto shadow overflow-hidden', 'min-w-full', 'bg-beige', 'spect8'],
};
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} {{$additional}}>
    <table class="{{$tableClass}}">
        <thead class="{{$headClass}}">
            <tr>
                {{ $head }}
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-cool-gray-200">
            {{ $body }}
        </tbody>
    </table>
</div>