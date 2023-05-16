@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')

    <div class="container py-5">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            @forelse ($comics as $comic)

                <div class="col">
                    <div class="card mb-3 h-100">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary w-100" href="{{route('comics.show', ['comic' => $comic->id])}}"> Details </a>
                        </div>
                    </div>
                </div>

            @empty

                <div class="alert alert-secondary my-5" role="alert">
                    No comics found.
                </div>

            @endforelse

        </div>
    </div>

@endsection
