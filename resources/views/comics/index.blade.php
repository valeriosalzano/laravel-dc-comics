@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            @forelse ($comics as $comic)

                <div class="col">
                    <div class="card mb-3 h-100">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                </div>

            @empty

                <div class="alert alert-secondary my-5" role="alert">
                    Nessun fumetto trovato.
                </div>

            @endforelse

        </div>
    </div>

@endsection
