<h6 
	{{ $attributes->merge(['class' => 'font-roboto text-lg font-medium']) }}
	{{ $attributes->whereStartsWith('x-') }}
	{{ $attributes->thatStartWith('wire:') }}>
	{{ $slot }}
</h6>