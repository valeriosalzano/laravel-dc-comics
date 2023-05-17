@extends('layouts.app')

@section('page-title', $comic->title);

@section('content')

    <div class="container py-5">

        <div class="card text-bg-dark mb-3">
            <div class="row g-0">
                <div class="col-md-4 overflow-hidden">
                    <img src="{{ $comic->thumb }}" class="rounded-start object-fit-cover h-100" alt="{{ $comic->title }}">
                </div>
                <div class="col-md-8 py-3">
                    <div class="card-body">
                        <h5 class="card-title fs-3 border-bottom">{{ $comic->title }}</h5>
                        <h6 class="card-title fs-5">{{ $comic->series }}</h6>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">Price: {{ $comic->price }}</p>
                        <p class="card-text">Date: {{ $comic->sale_date }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex row justify-content-between">
            <div class="col">
                <a href="{{ route('comics.index') }}" class="btn btn-primary w-100">Return to comics list</a>
            </div>
            <div class="col">
                <a class="w-100 btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}"> Edit comic </a>
            </div>
            <div class="col">
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post"
                    class="col delete_form">
                    @csrf
                    @method('DELETE')
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop{{ $comic->id }}">
                        Delete Comic
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop{{ $comic->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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


@endsection
