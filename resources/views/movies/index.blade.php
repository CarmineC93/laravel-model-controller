@extends('layouts.app')


@section('content')
    <div class="row row-cols-5">
        @foreach ($movies as $index => $movie)
            <div class="col g-3">
                <div class="card">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->original_title }}</p>
                        <p class="card-text">{{ $movie->vote }}/10</p>
                        <a href="{{ route('movies.show', $movie->id) }}">Show movie's details</a>
                        {{-- non corretto usare l'index, ma era possibile ugualmente al posto del $movie->id --}}
                        {{-- <a href="{{ route('movies.show', $index) }}">Show movie's details</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
