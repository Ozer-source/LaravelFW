@props(['active' => false])

<a class=" {{ $active ? 'block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}"
aria-current=" {{ $active ? 'page' : 'false' }} " {{ $attributes }}> {{ $slot }}</a>



{{-- dit was een thuisopdracht maar hij zei dat dit niet nodig zal zijn.
@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a class=" {{ $active ? 'block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}"
    aria-current=" {{ $active ? 'page' : 'false' }} " {{ $attributes }}> {{ $slot }}</a>
@else
    <button class=" {{ $active ? 'block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white' : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}"
    aria-current=" {{ $active ? 'page' : 'false' }} " {{ $attributes }}> {{ $slot }}</button>
@endif
--}}