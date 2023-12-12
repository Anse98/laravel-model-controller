@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="movies d-flex flex-wrap">
            @foreach ($movies as $movie)
            <div class="movie col-6 p-3">
                <div class="card p-2">
                    <h2 class="mb-3">{{$movie->title}}</h2>
                    <p><b>Il titolo originale è:</b> {{$movie->original_title}}</p>
                    <p><b>Nazionalità:</b> {{$movie->nationality}}</p>
                    <p><b>Data del film:</b> {{$movie->date}}</p>
                    <p><b>Voto della critica:</b> {{$movie->vote}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
    
@endsection
