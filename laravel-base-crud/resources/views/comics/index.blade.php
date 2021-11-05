
@extends('layouts.main')

@section('content')

    @foreach ($comics as $comic)

    <section class="container">

        <div class="row justify-content-center">

            <div class="box-comic col-12 text-center">
                <img src="{{ $comic->img_url }}" width="200">
                <h3>{{ $comic->title }}</h3>
                <p>{{ $comic->description }}</p>
                <a href="{{ route('comics.show', ['id'=> $comic->id]) }}">READ MORE</a>
            </div>

        </div>

    </section>
        
    @endforeach

@endsection
