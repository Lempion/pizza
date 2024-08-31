<aside {{ $attributes }} aria-label="Sidebar">
    <div class="overflow-y-auto py-4 pl-4 pr-16 h-screen bg-gray-50 rounded dark:bg-gray-800">
        <a href="{{ route('home') }}" class="flex items-center pl-2.5 mb-5">
            <div class="w-9 h-9">
                      @include('logo.logo')
            </div>
            <span class="ml-3 self-center text-xl font-semibold whitespace-nowrap dark:text-white">Pizza</span>
        </a>
        <ul class="space-y-2">
            <x-admin-sidebar-li href="{{ route('admin.dashboard.index') }}" :active="request()->routeIs('admin.dashboard.*')" name="Dashboard" svgFile="svg.dashboard" quantity="3"/>
            <x-admin-sidebar-li href="{{ route('products.index') }}" :active="request()->routeIs('products.*')" name="Products" svgFile="svg.products" quantity="3"/>
        </ul>
    </div>
</aside>
