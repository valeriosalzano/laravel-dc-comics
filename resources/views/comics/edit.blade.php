@extends('layouts.app')

@section('page-title')
    Add a new comic
@endsection

@section('content')
    <div class="container">

        @include('partials.validation.errors_alert')

        <form method="POST" action=" {{ route('comics.update', ['comic' => $comic->id]) }}">

            @csrf

            @method('PUT')

            @include(
                'partials.forms.edit_form_element',
                $data = [
                    'default' => $comic->thumb,
                    'type' => 'text',
                    'field' => 'thumb',
                    'label' => 'Comic cover link',
                ]
            )

            @include(
                'partials.forms.edit_form_element',
                $data = ['default' => $comic->title, 'type' => 'text', 'field' => 'title', 'label' => 'Title']
            )

            @include(
                'partials.forms.edit_form_element',
                $data = ['default' => $comic->series, 'type' => 'text', 'field' => 'series', 'label' => 'Series']
            )

            @include(
                'partials.forms.edit_form_element',
                $data = ['default' => $comic->type, 'type' => 'text', 'field' => 'type', 'label' => 'Type']
            )

            @include(
                'partials.forms.edit_form_element',
                $data = [
                    'default' => $comic->sale_date,
                    'type' => 'date',
                    'field' => 'sale_date',
                    'label' => 'Date',
                ]
            )

            @include(
                'partials.forms.edit_form_element',
                $data = ['default' => $comic->price, 'type' => 'float', 'field' => 'price', 'label' => 'Price']
            )

            @include(
                'partials.forms.edit_form_element',
                $data = [
                    'default' => $comic->description,
                    'type' => 'textarea',
                    'field' => 'description',
                    'label' => 'Description',
                ]
            )

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
