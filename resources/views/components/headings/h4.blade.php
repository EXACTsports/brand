<h4 
	{{ $attributes->merge(['class' => 'font-roboto text-xl font-semibold']) }}
	{{ $attributes->whereStartsWith('x-') }}
	{{ $attributes->thatStartWith('wire:') }}>
	{{ $slot }}
</h4>