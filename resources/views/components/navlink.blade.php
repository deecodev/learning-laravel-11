@props(['active' => false])

@php
    $linkClasses = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => "$linkClasses rounded-md px-3 py-2 text-sm font-medium capitalize"]) }}
    aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
