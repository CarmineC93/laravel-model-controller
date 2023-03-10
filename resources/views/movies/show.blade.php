@extends('layouts.app')

@section('content')
    <section>
        <div class="container">


            <div class="single-movie d-flex">
                <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                <div class="infos ms-4">
                    <h2 class="text-light">Title: {{ $movie->title }}</h2>
                    <h4 class="text-light">Date: {{ $movie->date }}</h4>
                    <h4 class="text-light">Nationality: {{ $movie->nationality }}</h4>
                    <h4 class="text-light">Votations: {{ $movie->vote }}/10</h4>
                </div>

                {{-- usando la selezione con index (non ottimale, da preferire sempre selezione tramite id)
            <div class="single-movie d-flex">
                <img src="{{ $singleMovie['image'] }}" alt="{{ $singleMovie['title'] }}">
                <div class="infos ms-4">
                    <h2 class="text-light">Title: {{ $singleMovie['title'] }}</h2>
                    <h4 class="text-light">Date: {{ $singleMovie['date'] }}</h4>
                    <h4 class="text-light">Nationality: {{ $singleMovie['nationality'] }}</h4>
                    <h4 class="text-light">Votations: {{ $singleMovie['vote'] }}/10</h4>
                </div>
            </div> --}}

            </div>
    </section>
@endsection
