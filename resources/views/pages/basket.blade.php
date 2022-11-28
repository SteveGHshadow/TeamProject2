<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('Basket Page') }}
        </h2>
    </x-slot>
    <div class="py-12 ">
        @foreach($baskets as $basket)
            <div class="pb-5 pl-5">
            <p> Name: {{$basket-> Name}}</p>
            <p> Description {{$basket-> Description}}</p>

            <form action="{{route("removeFromBasket")}}" method="POST">
                @csrf
                <input  type="hidden" name="id" value="{{$basket->id}}">
                <x-primary-button class="mt-4" >
                    {{ __('Remove Item?') }}
                </x-primary-button>
            </form>

            </div>
        @endforeach
            <form action="{{route("addToPastOrders")}}" method="post" class="pb-5 pl-5">
                @csrf
                @foreach($baskets as $basket)
                    @auth
                        <input  type="hidden" name="users_id" value="{{Auth::user()->id}}">
                    @endauth
                    <input  type="hidden" name="id" value="{{$basket->id}}">
                    <input  type="hidden" name="Name" value="{{$basket->Name}}">
                    <input  type="hidden" name="ProductType" value="{{$basket->ProductType}}">
                    <input  type="hidden" name="Size" value="{{$basket->Size}}">
                    <input  type="hidden" name="Price" value="{{$basket->Price}}">
                    <input  type="hidden" name="Description" value="{{$basket->Description}}">
                    <input  type="hidden" name="Image" value="{{$basket->Image}}">

                @endforeach
                @isset($basket)
                <x-primary-button class="mt-4" >
                    {{ __('Complete Order') }}
                </x-primary-button>
                @endisset

            </form>
    </div>
</x-app-layout>
