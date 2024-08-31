@props(['active', 'name', 'quantity' => null, 'svgFile', 'href'])

<li class="@if($active) active-link-admin @else hover:bg-orange-400 hover:text-white text-gray-500 @endif rounded-xl group">
    <a href="{{ $href }}" class="flex justify-between items-center p-2 text-base">
        <div class="flex">
            @include($svgFile)
            <span class="ml-3">{{ $name }}</span>
        </div>

        @if(isset($quantity))
            <span class="@if($active) bg-white @else bg-gray-200 group-hover:bg-white @endif inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-gray-500 rounded-full">
            3
            </span>
        @endif
    </a>
</li>

