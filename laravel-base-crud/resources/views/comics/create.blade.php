@extends ('layouts.main')

@section('title')

@section('content')
    <div class="card-title">
        <h1>Inserisci un nuovo Fumetto</h1>
        
    </div>
    <div class="card-body">
        <form action="{{ route('comics.store') }}" method="post">
        @csrf
            <div class="row">

                <div class="col-4">
                    <label for="title" class="form-label">Titolo Comic</label>
                    <input class="form-control" type="text" id="title" name="title" placeholder="Inserisci il titolo del fumetto">
                    <div class="form-text">Inserisci il titolo del Fumetto da inserire</div>
                </div>

                <div class="col-4">
                    <label for="author" class="form-label">Autore</label>
                    <input class="form-control" type="text" id="author" name="author" placeholder="Inserisci l'autore del fumetto">
                    <div class="form-text">Inserisci l'autore del Fumetto da inserire</div>
                </div>

                <div class="col-4">
                    <input type="submit" class="btn btn-primary" value="invia">
                </div>

            </div>
        </form>
    </div>
@endsection