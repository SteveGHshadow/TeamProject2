<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('PastOrders Page') }}
        </h2>
    </x-slot>
{{--    <div class="p-5">--}}
{{--        @foreach($orders as $pastOrders)--}}
{{--            <div class="pb-7">--}}
{{--                <p> Name: {{$pastOrders-> Name}}</p>--}}
{{--                <p> ProductType: {{$pastOrders-> ProductType}}</p>--}}
{{--                <p> Size: {{$pastOrders-> Size}}</p>--}}
{{--                <p> Price: {{$pastOrders-> Price}}</p>--}}
{{--                <p> Description: {{$pastOrders-> Description}}</p>--}}
{{--                <p> Image: {{$pastOrders-> Image}}</p>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($orders as $pastOrders)
                        <div class="pb-7">
                            <p> Name: {{$pastOrders-> Name}}</p>
                            <p> ProductType: {{$pastOrders-> ProductType}}</p>
                            <p> Size: {{$pastOrders-> Size}}</p>
                            <p> Price: {{$pastOrders-> Price}}</p>
                            <p> Description: {{$pastOrders-> Description}}</p>
                            <p> Image: {{$pastOrders-> Image}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>







</x-app-layout>
