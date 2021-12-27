<h1 
	{{ $attributes->merge(['class' => 'font-roboto text-3xl font-bold']) }}
	{{ $attributes->whereStartsWith('x-') }}
	{{ $attributes->thatStartWith('wire:') }}>
	{{ $slot }}
</h1>