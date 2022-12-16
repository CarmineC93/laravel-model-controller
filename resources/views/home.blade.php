@extends('layouts.app')

@section('content')
    <section class="d-flex">
        <h2>Movies</h2>
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">{{ $movie->title }}</p>

                </div>
            </div>
        @endforeach
    </section>
@endsection
