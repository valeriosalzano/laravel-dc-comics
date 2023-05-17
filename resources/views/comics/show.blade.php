@extends('layouts.app')

@section('page-title', $comic->title );

@section('content')

<div class="container py-5">

    <div class="card text-bg-dark mb-3">
        <div class="row g-0">
            <div class="col-md-4 overflow-hidden">
                <img src="{{$comic->thumb}}" class="rounded-start object-fit-cover h-100" alt="{{$comic->title}}">
            </div>
            <div class="col-md-8 py-3">
                <div class="card-body">
                    <h5 class="card-title fs-3 border-bottom">{{$comic->title}}</h5>
                    <h6 class="card-title fs-5">{{$comic->series}}</h6>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">Price: {{$comic->price}}</p>
                    <p class="card-text">Date: {{$comic->sale_date}}</p>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('comics.index') }}" class="btn btn-primary">Return to comics list</a>
    <a class="btn btn-warning" href="{{route('comics.edit', ['comic' => $comic->id])}}"> Edit comic </a>
</div>

    
@endsection
