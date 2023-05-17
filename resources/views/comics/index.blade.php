@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')

    @include('partials.jumbotron')

    <div class="container py-3">

        <div class="fluid-container text-center mb-3">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add a missing comic</a>
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
                            <a class="btn btn-primary w-100 mb-2" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                Comic page 
                            </a>

                            <a class="w-100 btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}"> Edit comic </a>

                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post"
                                class="col delete_form">
                                @csrf
                                @method('DELETE')
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger w-100 mt-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop{{ $comic->id }}">
                                    Delete Comic
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{ $comic->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content text-bg-dark">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel"> Are you sure?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                You are deleting {{ $comic->title }}
                                            </div>
                                            <div class="modal-footer d-flex justify-content-between">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close </button>
                                                <button type="submit" class="btn btn-danger delete-btn"> Confirm </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
