<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
{{--        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">--}}
{{--            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </x-nav-link>--}}
{{--            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">--}}
{{--                {{ __('home') }}--}}
{{--            </x-nav-link>--}}
{{--            <x-nav-link :href="route('items')" :active="request()->routeIs('items')">--}}
{{--                {{ __('Items') }}--}}
{{--            </x-nav-link>--}}
{{--            <x-nav-link :href="route('contactUs')" :active="request()->routeIs('contactUs')">--}}
{{--                {{ __('Contact Us') }}--}}
{{--            </x-nav-link>--}}
{{--            <x-nav-link :href="route('aboutUs')" :active="request()->routeIs('aboutUs')">--}}
{{--                {{ __('About Us') }}--}}
{{--            </x-nav-link>--}}
{{--        </div>--}}





        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
