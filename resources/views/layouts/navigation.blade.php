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
            @auth
                <div>
                    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm rounded-full md:me-0 focus:ring-0" type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-12 h-12" src="{{ asset('storage/images/profile.png') }}" alt="user photo">
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatar" class="z-[31] hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md border border-gray-300 w-44">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>Bonnie Green</div>
                            <div class="font-medium truncate">name@flowbite.com</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                            @if(auth()->user()->role(['Admin']))
                                <li>
                                    <a href="{{ route('admin.dashboard.index') }}" class="block text-white font-semibold px-4 py-2 bg-orange-400 hover:bg-orange-500">Admin</a>
                                </li>
                            @endif
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
                </div>
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
