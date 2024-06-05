<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>


    <div class="d-flex justify-content-center wrapper">
        <div class="card__column">
            @foreach ($posts as $post)
                <div class="card" style="width: 500px;">
                    <div class="d-flex nickname">
                       <p>@</p> <p>{{$post->nickname}}</p>
                    </div>
                    <img src="{{asset('storage/images/' . $post->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-name">{{$post->name}}</p>
                            <p class="card-text">{{$post->description}}</p>
                            <p class="card-date">{{$post->date}}</p>
                        </div>
                </div>
            @endforeach
        </div>      
    </div>
   
</x-app-layout>

<style>
    .wrapper{
        margin-top: 50px;
    }

    .nickname{
        padding: 20px;
    }

    .card{
        margin-bottom: 30px;
    }
</style>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>