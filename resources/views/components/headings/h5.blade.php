<h5 
	{{ $attributes->merge(['class' => 'font-roboto text-lg font-semibold']) }}
	{{ $attributes->whereStartsWith('x-') }}
	{{ $attributes->thatStartWith('wire:') }}>
	{{ $slot }}
</h5>