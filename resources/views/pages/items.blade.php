<x-app-layout>
    <x-slot name="header">
        <h2 class=" headerFont font-semibold text-gray-800 leading-tight">
            {{ __('Product Page') }}
        </h2>
    </x-slot>
    <div class="">

        <style>
            #websiteTitle {
                color: black;
            }
        </style>


{{--        @foreach($items as $item)--}}
{{--            <div class=" py-12 bg-gray-300">--}}
{{--                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                        <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                            <div class="pb-5 pl-5">--}}
{{--                            <p> Name: {{$item-> Name}}</p>--}}
{{--                            <p> ProductType: {{$item-> ProductType}}</p>--}}
{{--                            <p> Size: {{$item-> Size}}</p>--}}
{{--                            <p> Price: {{$item-> Price}}</p>--}}
{{--                            <p> Description: {{$item-> Description}}</p>--}}
{{--                            <p> Image: {{$item-> Image}}</p>--}}

{{--                            <form action="{{route("addToBasket")}}" method="post">--}}
{{--                            @csrf--}}
{{--                            @auth--}}
{{--                            <input  type="hidden" name="users_id" value="{{Auth::user()->id}}">--}}
{{--                            @endauth--}}
{{--                            <input  type="hidden" name="id" value="{{$item->id}}">--}}
{{--                            <input  type="hidden" name="Name" value="{{$item->Name}}">--}}
{{--                            <input  type="hidden" name="ProductType" value="{{$item->ProductType}}">--}}
{{--                            <input  type="hidden" name="Size" value="{{$item->Size}}">--}}
{{--                            <input  type="hidden" name="Price" value="{{$item->Price}}">--}}
{{--                            <input  type="hidden" name="Description" value="{{$item->Description}}">--}}
{{--                            <input  type="hidden" name="Image" value="{{$item->Image}}">--}}
{{--                            <x-primary-button class="mt-4" >--}}
{{--                                {{ __('Add to Basket') }}--}}
{{--                            </x-primary-button>--}}
{{--                            </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--    </div>--}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />--}}
{{--    <link rel="stylesheet" href="assets/custom.css">--}}


    <div class=" py-12 bg-gray-300">

        <div  class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-10">
            <div  class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div id="itembackground" class="p-6 bg-white border-b border-gray-200 ">
                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center box-border  ">
                        @foreach($items as $item)
                        <div class="col ">
                            <div class="mb-4 rounded-3 shadow-sm bg-white">
                                <div class="card-header py-3">
                                    <img src="{{ URL::asset('/image/'.$item->Image)}}" alt="" id="my_image">
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">{{$item-> Name}}</h3>
                                    <h1 class="card-title pricing-card-title text-3xl">£{{$item->Price}}</h1>
                                    <p> {{$item-> Description}}</p>
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
{{--                                    <button type="button" class="">Add to Basket</button>--}}
                                        <x-primary-button class="w-100 btn-dark btn btn-lg btn-outline-primary" >
                                            {{ __('Add to Basket') }}
                                        </x-primary-button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>







</x-app-layout>





