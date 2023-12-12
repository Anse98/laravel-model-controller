@extends('layouts.app')

@section('content')

<section class="movie-section">
    <div class="container">
        <div class="movies d-flex flex-wrap">
            @foreach ($movies as $movie)
            <div class="movie col-6 p-3">
                <div class="card p-2">
                    <h2 class="title mb-3">{{$movie->title}}</h2>
                    <p><span class="clr-yellow">Il titolo originale è:</span> {{$movie->original_title}}</p>
                    <p><span class="clr-yellow">Nazionalità:</span> {{$movie->nationality}}</p>
                    <p><span class="clr-yellow">Data del film:</span> {{$movie->date}}</p>
                    <p><span class="clr-yellow">Voto della critica:</span> {{$movie->vote}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
    
@endsection
