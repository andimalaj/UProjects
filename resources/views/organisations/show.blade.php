@extends('layouts.app')

@section('title', 'Details for ' . $organisation->organisation_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $organisation->organisation_name }}</h1>
            <p><a href="{{ route('organisations.show', ['organisation' => $organisation]) }}">Edit</a></p>

            <form action="{{ route('organisations.show', ['organisation' => $organisation]) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $organisation->organisation_name }}</p>
        </div>
    </div>


@endsection
