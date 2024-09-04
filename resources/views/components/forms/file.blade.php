@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'value' => old($name),
        'class' => 'block w-full text-sm font-normal border border-orange-500 rounded-lg cursor-pointer bg-white/10 border-orange-500 focus:ring-1 focus:outline-none focus:ring-orange-500 focus:border-orange-500',
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }} type="file">
</x-forms.field>
