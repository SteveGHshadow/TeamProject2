<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('Admin Page') }}
        </h2>
    </x-slot>

    <div class=" py-12 bg-gray-300">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-center adminH2">Customer details</h2>
                    <table>
                        <tr>
                            <th class="pr-40">ID</th>
                            <th class="pr-20">User</th>
                            <th>Email</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                            <td class="pr-8">{{$user-> id}}</td>
                            <td>{{$user-> name}} </td>
                            <td class="pl-40">{{$user-> email}}</td><br>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-center adminH2">Placed Orders</h2>
                    <table>
                        <tr>
                            <th class="pr-4">Order ID</th>
                            <th class="pr-2">Users ID</th>
                            <th>Items ID</th>
                            <th>Name</th>
                            <th>Product Type</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                    @foreach($admin as $user)
                        <tr class="divide-y-2 divide-gray-600">
                            <td class="pr-4 pb-3 text-center">{{$user-> id}} </td>
                            <td class="pr-4 pb-3 text-center">{{$user-> users_id}}</td>
                            <td class="pr-4 pb-3 text-center">{{$user-> items_id}}</td>
                            <td class="pr-4 pb-3 text-center">{{$user-> Name}}</td>
                            <td class="pr-4 pb-3 text-center">{{$user-> ProductType}}</td>
                            <td class="pr-4 pb-3 text-center">{{$user-> Size}}</td>
                            <td class="pr-4 pb-3 text-center">{{$user-> Price}}</td>
                            <td class="pr-4 pb-3 text-center">{{$user-> Description}}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <h2 class="text-center adminH2">Stocked Products</h2>
                    <table>
                        <tr>
                            <th class="pr-4">Item ID</th>
                            <th>Name</th>
                            <th class="pr-5">Product Type</th>
                            <th>Stocked</th>
                        </tr>
                        @foreach($stocks as $user)
                            <tr class="divide-y-2 divide-gray-600 ">
                                <td class="pr-4 pb-3 text-center">{{$user-> id}} </td>
                                <td class="pr-4 pb-3 text-center">{{$user-> Name}}</td>
                                <td class="pr-4 pb-3 text-center">{{$user-> ProductType}}</td>
                                <td class="pr-4 pb-3 text-center">{{$user-> stocked}}</td>
                            </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>




    </div>










</x-app-layout>
