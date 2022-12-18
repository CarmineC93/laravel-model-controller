@extends('layouts.app')

@section('content')
    <section>
        <div class="container mt-3">
            <h2>Movies</h2>
            <div class="row row-cols-5">
                @foreach ($movies as $index => $movie)
                    <div class="col g-3">
                        <div class="card">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text">{{ $movie->original_title }}</p>
                                <p class="card-text">{{ $movie->vote }}/10</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
