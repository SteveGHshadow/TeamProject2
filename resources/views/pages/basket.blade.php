<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('Basket Page') }}
        </h2>
    </x-slot>
{{--    <div class="py-12 ">--}}
{{--        @foreach($baskets as $basket)--}}
{{--            <div class="pb-5 pl-5">--}}
{{--            <p> Name: {{$basket-> Name}}</p>--}}
{{--            <p> Description {{$basket-> Description}}</p>--}}

{{--            <form action="{{route("removeFromBasket")}}" method="POST">--}}
{{--                @csrf--}}
{{--                <input  type="hidden" name="id" value="{{$basket->id}}">--}}
{{--                <x-primary-button class="mt-4" >--}}
{{--                    {{ __('Remove Item?') }}--}}
{{--                </x-primary-button>--}}
{{--            </form>--}}

{{--            </div>--}}
{{--        @endforeach--}}
{{--            <form action="{{route("addToPastOrders")}}" method="post" class="pb-5 pl-5">--}}
{{--                @csrf--}}
{{--                @foreach($baskets as $basket)--}}
{{--                    @auth--}}
{{--                        <input  type="hidden" name="users_id" value="{{Auth::user()->id}}">--}}
{{--                    @endauth--}}
{{--                    <input  type="hidden" name="id" value="{{$basket->id}}">--}}
{{--                    <input  type="hidden" name="Name" value="{{$basket->Name}}">--}}
{{--                    <input  type="hidden" name="ProductType" value="{{$basket->ProductType}}">--}}
{{--                    <input  type="hidden" name="Size" value="{{$basket->Size}}">--}}
{{--                    <input  type="hidden" name="Price" value="{{$basket->Price}}">--}}
{{--                    <input  type="hidden" name="Description" value="{{$basket->Description}}">--}}
{{--                    <input  type="hidden" name="Image" value="{{$basket->Image}}">--}}

{{--                @endforeach--}}
{{--                @isset($basket)--}}
{{--                <x-primary-button class="mt-4" >--}}
{{--                    {{ __('Complete Order') }}--}}
{{--                </x-primary-button>--}}
{{--                @endisset--}}
{{--            </form>--}}
{{--    </div>--}}

    <div class="basket-page py-12 bg-gray-300">

        <div class="page">
            @foreach($baskets as $basket)
            <div class="basket bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="basket-itemz p-6 bg-white border-b border-gray-200">
                    <div class="image-box">
                        <img
                            style="height: 120px"
                            src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/444d8f8a-eb08-4035-9886-9ac43fb51445/sportswear-tech-fleece-hoodie-kC99j3.png"
                            alt=""
                        />
                    </div>
{{--                    <div class="about adjustment">--}}
{{--                        <h2>Nike Sportswear Tech Fleece7</h2>--}}
{{--                        <h2 class="price adjustment">£109.99</h2>--}}
{{--                        <h4 class="description adjustment">--}}
{{--                            Ready to rock the warmth and comfort of your favourite weekender--}}
{{--                            hoodie, but need to keep your look clean? This Nike Tech Fleece--}}
{{--                            hoodie strikes the right balance with a lightweight, low-profile--}}
{{--                            design that packs in the heat without adding bulk. You can layer--}}
{{--                            with ease whether you're lounging at home or making your city--}}
{{--                            commute.--}}
{{--                        </h4>--}}
{{--                    </div>--}}


                        <div class="about adjustment">

                            <h2>Name: {{$basket-> Name}}</h2>
                            <h2>Price: £{{$basket-> Price}}</h2>
                            <h4 class="description adjustment">
                                {{$basket-> Description}}
                            </h4>

                        </div>






















                    <div class="size">
                        <form>
                            <label for="size"> Size: </label>
                            <select name="size">
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </form>
                    </div>
{{--                    <div class="delete-item">--}}
{{--                        <button>Remove item</button>--}}
{{--                    </div>--}}
                    <form action="{{route("removeFromBasket")}}" method="POST">
                        @csrf
                        <input  type="hidden" name="id" value="{{$basket->id}}">
                        <x-primary-button class="mt-4">
                            {{ __('Remove Item') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>


            @endforeach










            <div class="container basket bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="left">
                        <form>
                            <label for="coupon-code">Enter your coupon/student discount code here:</label
                            >
                            <input type="coupon-code" placeholder="Enter coupon code"/>
{{--                            <input class="no-outline" type="submit" value="Submit" />--}}
                            <x-primary-button class="bg-black ml-2">
                                {{ __('Sumbit') }}
                            </x-primary-button>
                        </form>
                </div>




                <form action="{{route("addToPastOrders")}}" method="post">
                <div class="right bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="checkout">
                        <input type="hidden" {{$counter=0}}>
                        @foreach($baskets as $basket)
                        <input type="hidden" {{$counter += $basket->Price}}>
                        @endforeach
                        <h4>Basket Total: £{{$counter}}</h4>
                            @csrf
                                <input  type="hidden" name="users_id" value="{{Auth::user()->id}}">
                            @isset($basket)
                                <x-primary-button >
                                    {{ __('Checkout') }}
                                </x-primary-button>
                            @endisset
                        </form>
                        </div>
                </div>
            </div>




        </div>
    </div>









</x-app-layout>
