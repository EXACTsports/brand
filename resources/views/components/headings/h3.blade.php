<h3 
	{{ $attributes->merge(['class' => 'font-roboto text-xl font-bold']) }}
	{{ $attributes->whereStartsWith('x-') }}
	{{ $attributes->thatStartWith('wire:') }}>
	{{ $slot }}
</h3>