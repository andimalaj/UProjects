@extends('layouts.app')

@section('title', 'Edit Details for ' . $organisation->organisation_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $organisation->organisation_name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('organisations.update', ['organisation' => $organisation]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('organisations.form')

                <button type="submit" class="btn btn-primary">Save organisation</button>
            </form>
        </div>
    </div>
@endsection
