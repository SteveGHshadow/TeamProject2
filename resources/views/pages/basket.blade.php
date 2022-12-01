<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('Basket Page') }}
        </h2>
    </x-slot>

    <div class="basket-page py-12 bg-gray-300">

        <div class="BasketsPage">
            @foreach($baskets as $basket)
            <div class="basket bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="basket-itemz p-6 bg-white border-b border-gray-200">
                    <div class="image-box">
                        <img src="{{ URL::asset('/image/'.$basket->Image)}}" alt="" id="my_image">
                    </div>


                        <div class="about adjustment">

                            <h2>Name: {{$basket-> Name}}</h2>
                            <h2>Price: £{{$basket-> Price}}</h2>
                            <h4 class="description adjustment">
                                {{$basket-> Description}}
                            </h4>

                        </div>

                    <div class="size">
                        <form action="{{route("updateSizeBasket")}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$basket->id}}">
                            <label for="size"> Size: </label><br>

{{--                            <input type="radio" id="SizeS" name="sizes" <?php if(isset($basket)&& $basket=="S")?> value="S">--}}
{{--                            <label for="SizeS">Small</label><br>--}}

{{--                            <input type="radio" id="SizeM" name="sizes" value="{{$basket->Size = "M"}}">--}}
{{--                            <label for="SizeM">Medium</label><br>--}}

{{--                            <input type="radio" id="SizeL" name="sizes" value="{{$basket->Size = "L"}}">--}}
{{--                            <label for="SizeL">Large</label><br>--}}



                            <select name="Size" id="Size">

                                <option selected>Size</option>
                                <option id="Size" {{$small = "S"}}> Small</option>
                                <option id="Size" {{$medium = "M"}}>Medium</option>
                                <option id="Size" {{$large = "L"}}>Large</option>


                            </select>



                            <x-primary-button class="bg-black mt-5 ml-12">
                                {{ __('update') }}
                            </x-primary-button>
                        </form>
                    </div>

                    <form action="{{route("removeFromBasket")}}" method="POST">
                        @csrf
                        <input id="couponCode" type="hidden" name="id" value="{{$basket->id}}">


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
                            <input type="coupon-code" placeholder="Enter coupon code" class="bg-gray-300"/>
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
