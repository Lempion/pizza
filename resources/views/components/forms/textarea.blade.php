@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl text-gray-800 bg-white/10 border-orange-500 focus:outline-none focus:ring-orange-500 focus:border-orange-500 px-3 py-2 w-full font-semibold custom-scroll',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
        <textarea rows="4" {{ $attributes($defaults) }}></textarea>
</x-forms.field>



