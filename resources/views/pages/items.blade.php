<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('Product Page') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @foreach($items as $item)
            <div class="pb-5 pl-5">
            <p> Name: {{$item-> Name}}</p>
            <p> ProductType: {{$item-> ProductType}}</p>
            <p> Size: {{$item-> Size}}</p>
            <p> Price: {{$item-> Price}}</p>
            <p> Description: {{$item-> Description}}</p>
            <p> Image: {{$item-> Image}}</p>

            <form action="{{route("addToBasket")}}" method="post">
            @csrf
            @auth
            <input  type="hidden" name="users_id" value="{{Auth::user()->id}}">
            @endauth
            <input  type="hidden" name="id" value="{{$item->id}}">
            <input  type="hidden" name="Name" value="{{$item->Name}}">
            <input  type="hidden" name="ProductType" value="{{$item->ProductType}}">
            <input  type="hidden" name="Size" value="{{$item->Size}}">
            <input  type="hidden" name="Price" value="{{$item->Price}}">
            <input  type="hidden" name="Description" value="{{$item->Description}}">
            <input  type="hidden" name="Image" value="{{$item->Image}}">
            <x-primary-button class="mt-4" >
                {{ __('Add to Basket') }}
            </x-primary-button>
            </form>
            </div>
        @endforeach
    </div>


</x-app-layout>
