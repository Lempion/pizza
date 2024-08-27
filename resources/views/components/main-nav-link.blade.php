@props(['anchor', 'src', 'name'])

<div>
    <a class="flex flex-col justify-center items-center transition duration-700 ease-in-out hover:underline scroll" href="#{{ $anchor }}">
        <div class="w-[35px] h-[35px]">
            <img src="{{ $src }}" class="w-full h-full" alt="...">
        </div>
        <p>{{ $name }}</p>
    </a>
</div>


