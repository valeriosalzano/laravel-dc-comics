@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')

    @include('partials.jumbotron')

    <div class="container py-3">

        <div class="fluid-container text-center mb-3">
            <a href="{{route('comics.create')}}" class="btn btn-primary">Add a missing comic</a>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            @forelse ($comics as $comic)

                <div class="col">
                    <div class="card text-bg-dark mb-3 h-100">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold text-uppercase">{{ $comic['title'] }}</h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary w-100" href="{{route('comics.show', ['comic' => $comic->id])}}"> Comic page </a>
                            {{-- <a class="btn btn-warning w-100" href="{{route('comics.edit', ['comic' => $comic->id])}}"> Edit comic </a> --}}
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
