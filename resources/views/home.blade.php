@extends('layouts.app')

@section('page-title', 'Homepage')

@section('content')

    <div class="container text-center py-5">
        <h1 class="display-1">Welcome to the DC-Comics World!</h1>
    </div>

    @include('partials.jumbotron')
    
@endsection