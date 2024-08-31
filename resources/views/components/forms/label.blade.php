@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-orange-500 rounded-full inline-block"></span>
    <label class="font-semibold text-xl text-gray-900" for="{{ $name }}">{{ $label }}</label>
</div>
