@props(['active' => false])

@php
$activeClasses = ($active)
            ? 'text-gray-400'
            : 'text-gray-600 hover:text-gray-900';
$classes = 'relative font-extrabold text-lg ' . $activeClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    @if($active)
        <div class="absolute block bg-orange-500 p-1 rounded-full -top-2 left-1/2 transform -translate-x-1/2"></div>
    @endif
</a>


