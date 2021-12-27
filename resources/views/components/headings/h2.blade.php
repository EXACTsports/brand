<h2 
	{{ $attributes->merge(['class' => 'font-roboto text-2xl font-bold']) }}
	{{ $attributes->whereStartsWith('x-') }}
	{{ $attributes->thatStartWith('wire:') }}>
	{{ $slot }}
</h2>