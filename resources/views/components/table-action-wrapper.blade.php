@php
    $defaults = [
        'class' => 'rounded-full cursor-pointer p-1 flex justify-center items-center',
        ];
@endphp

<div {{ $attributes($defaults) }}>
    {{ $slot }}
</div>
