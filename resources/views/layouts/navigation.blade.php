<nav class="w-full h-20 flex">
    <div class="w-2/12 h-full flex items-center justify-center">
        <div class="w-full h-16">
            @include('logo.logo')
        </div>
    </div>
    <div class="w-10/12 h-full flex justify-end items-center space-x-6">
        <x-nav-link href="{{ route('home') }}" active="{{ request()->routeIs('home') }}">Main</x-nav-link>
        <x-nav-link href="#">Stock</x-nav-link>
        <x-nav-link href="#">About us</x-nav-link>
        <x-nav-link href="#">Contacts</x-nav-link>
        <div>
            @auth()
                <x-nav-link>
                    Profile
                </x-nav-link>
            @else
                <div class="ml-5">
                    <a href="{{ route('login') }}">
                        <div class="bg-orange-500 p-2 rounded-md shadow-sm hover:shadow-orange-400 text-lg font-extrabold text-white">
                            Sign In
                        </div>
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
<hr>
