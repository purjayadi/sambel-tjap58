@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-red-600 text-white px-3 py-2 rounded-md text-sm font-bold'
            : 'text-gray-700 hover:bg-red-500 hover:text-white px-3 py-2 rounded-md text-sm font-bold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
