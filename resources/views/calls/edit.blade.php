@extends('layouts.app')

@section('title', 'Edit Details for ' . $call->call_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $call->call_name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('calls.update', ['call' => $call]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('calls.form')

                <button type="submit" class="btn btn-primary">Save Call</button>
            </form>
        </div>
    </div>
@endsection
