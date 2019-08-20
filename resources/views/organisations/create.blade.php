@extends('layouts.app')

@section('title', 'Add New Organisation')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Organisation</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('organisations.store') }}" method="POST" enctype="multipart/form-data">
                @include('organisations.form')

                <button type="submit" class="btn btn-primary">Add </button>
            </form>
        </div>
    </div>
@endsection
