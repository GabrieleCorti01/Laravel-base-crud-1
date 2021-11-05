
@extends('layouts.main')

@section('content')
<h1>Sono la comics.show</h1>

<section class="container">

    <a href="{{ route('comics.index') }}">BACK TO COMICS</a>

    <div class="box-comic">

        <img src="{{ $comic->img_url }}" width="200">
        <h3>{{ $comic->title }}</h3>    
        <p>{{ $comic->description }}</p>
        
    </div>

</section>
@endsection