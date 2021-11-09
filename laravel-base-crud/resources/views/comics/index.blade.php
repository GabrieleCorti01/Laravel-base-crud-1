
@extends('layouts.main')

@section('content')

    

    <section class="container">

        <div class="row d-flex justify-content-around">
            @foreach ($comics as $comic)
                <div class="box-comic col-4 p-3 text-center">
                    <img src="{{ $comic->img_url }}" width="200">
                    <h3>{{ $comic->title }}</h3>
                    <p>{{ $comic->description }}</p>
                    <a href="{{ route('comics.show', ['id'=> $comic->id]) }}">READ MORE</a>
                </div>
            @endforeach
        </div>

    </section>
        
   

@endsection
