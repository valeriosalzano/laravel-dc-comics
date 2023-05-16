@extends('layouts.app')

@section('page-title')
    Add a new comic 
@endsection

@section('content')

    <form method="POST" action="{{route('comics.store')}}" class="container">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Comic cover link:</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="text" class="form-control" id="date" name="date">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection