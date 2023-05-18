@extends('layouts.app')

@section('page-title')
    Add a new comic 
@endsection

@section('content')

    <form method="POST" action="{{route('comics.store')}}" class="container">

        @csrf

        

        @include('partials.forms.create_form_element',$data = ['type'=> 'text', 'field'=>'thumb', 'label' => 'Comic cover link'])

        @include('partials.forms.create_form_element',$data = ['type'=> 'text', 'field'=>'title', 'label' => 'Title'])

        @include('partials.forms.create_form_element',$data = ['type'=> 'text', 'field'=>'series', 'label' => 'Series'])

        @include('partials.forms.create_form_element',$data = ['type'=> 'text', 'field'=>'type', 'label' => 'Type'])

        @include('partials.forms.create_form_element',$data = ['type'=> 'date', 'field'=>'sale_date', 'label' => 'Date'])

        @include('partials.forms.create_form_element',$data = ['type'=> 'float', 'field'=>'price', 'label' => 'Price'])

        @include('partials.forms.create_form_element',$data = ['type'=> 'textarea', 'field'=>'description', 'label' => 'Description'])

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection