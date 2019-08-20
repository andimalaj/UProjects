@extends('layouts.app')

@section('title', 'Add New Application')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Application</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('callapplications.store', ['call' => $call]) }}" method="POST" enctype="multipart/form-data">
                @include('callapplications.form')

                <button type="submit" class="btn btn-primary">Add Application</button>
            </form>
        </div>
    </div>
@endsection
