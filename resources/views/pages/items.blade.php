<x-app-layout>
    <div class="py-12">
        items page
        @foreach($items as $item)
            <p> Name: {{$item-> Name}}</p>
        @endforeach
    </div>


</x-app-layout>
