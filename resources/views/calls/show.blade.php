@extends('layouts.app')

@section('title', 'Details for ' . $call->call_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $call->call_name }}</h1>
            <p><a href="{{ route('calls.show', ['call' => $call]) }}">Edit</a></p>

            <form action="{{ route('calls.show', ['call' => $call]) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{ $call->call_name }}</p>
            <p><strong>StartDate</strong> {{ $call->start_date }}</p>
            <p><strong>EndDate</strong> {{ $call->end_date }}</p>
        </div>
    </div>


@endsection
