<x-app-layout>
    <x-slot name="header">
        <h2 class="headerFont  font-semibold text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>
    <body>
    <div class = "about" >
        <div class="AboutUscontent">
            <div class="aboutUsText">
                <h2>We UniStyle are here to provide the best customer service for you! </h2>


                <p>In 2022 UniStyle was founded by a group of university Students to counter the overpriced brands clothing with
                    quality and low-price clothes which we believe university students seek. </p>

                <p> Presenting to you stylish clothing throughout your study years. Providing simple
                    ,stylish and affordable fashion lies at the core of our motives.
                    Our aim is to make customers feel beautiful, fashionable and empowered.</p>

                <p> We plan to continue growing and evolving, as we inspire people. We hope
                    to create a trusting bond with our customers as we supply them the best quality clothes.
                    Through our brand, we strive to connect young people around the world.
                </p>
                <p> UniStyle's commitment will always be to make customers happy.
                    <br><h3>Connect With UniStyle!</h3>
                </p>

            </div>
        </div>
        <div class="image-section">
            <img src="{{URL::asset('/image/hoodie-y.png')}}" alt="Hoodie Pic">
        </div>

    </div>

    </body>
    </html>
</x-app-layout>
