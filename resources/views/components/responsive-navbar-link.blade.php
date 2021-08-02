@props(['active'])

@php
$classes = $active ?? false ? 'block bg-red-700 text-white px-3 py-2 rounded-md text-sm font-medium' : 'block text-gray-500 hover:bg-red-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
