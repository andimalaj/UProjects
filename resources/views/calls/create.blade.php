@extends('layouts.app')

@section('title', 'Add New Call')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Call</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('calls.store') }}" method="POST" enctype="multipart/form-data">
                @include('calls.form')

                <button type="submit" class="btn btn-primary">Add Call</button>
            </form>
        </div>
    </div>
@endsection
