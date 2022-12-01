<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div id="nav-bar" class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8 pb-auto">
        <div class="flex justify-between h-auto">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600 " />
                    </a>
                </div>
                <div id="uniTitle" class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <p id="websiteTitle" class="pl-10">UniSTYLE</p>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required="">
                        </div>
{{--                                                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>--}}
{{--                                                    <span class="sr-only">Search</span>--}}
{{--                                                </button>--}}
                    </form>
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('items')" :active="request()->routeIs('items')">
                            {{ __('Items') }}
                        </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div id="nav-bar" class="hidden sm:flex sm:items-center sm:ml-6 space-x-4 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-[20px] font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            @auth()
                            <div>{{ Auth::user()->name }}</div>
                            @endauth
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>


                    <x-slot name="content">
                        @if(Auth::user()->admin == 1)
                            <form action="{{ route('adminPage') }}" method="get">
                                @csrf
                                <x-dropdown-link :href="route('adminPage')">
                                    {{ __('Admin Page') }}
                                </x-dropdown-link>
                            </form>
                        @endif



                        <form action="{{ route('pastOrders') }}" method="post">
                            @csrf
                            <x-dropdown-link :href="route('pastOrders')">
                                {{ __('My Orders') }}
                            </x-dropdown-link>
                        </form>


                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                <x-nav-link :href="route('basket')" :active="request()->routeIs('basket')">
                    <span class="material-symbols-outlined">shopping_basket</span>
                </x-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div id="nav-bar" class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @auth()
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endauth
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>



</nav>
<nav x-data="{ open: false }" class="fixed inset-x-0 bottom-0 bg-white border-b border-gray-100 bottom-0 w-full p-3">
    <footer class="fixed inset-x-0 bottom-0 sm:-my-px sm:ml-10 sm:flex content-end justify-end  mr-20 ">
        <div class="flex">
            <!-- Navigation Links -->
            <div id="nav-bar" class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                <x-nav-link :href="route('aboutUs')" :active="request()->routeIs('aboutUs')">
                    {{ __('About Us') }}
                </x-nav-link>
                <x-nav-link :href="route('contactUs')" :active="request()->routeIs('contactUs')">
                    {{ __('Contact Us') }}
                </x-nav-link>

            </div>
        </div>
    </footer>
</nav>

