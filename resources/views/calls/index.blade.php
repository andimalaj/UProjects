@extends('layouts.app')

@section('title', 'Call List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Call List</h1>
        </div>
    </div>


        <div class="row">
            <div class="col-12">
                <p><a href="{{ route('calls.create') }}">Add New Call</a></p>
            </div>
        </div>



    <table class="table table-bordered text-align: center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">call_name</th>
            <th scope="col">call_description</th>
            <th scope="col">status</th>
            <th scope="col">startdate</th>
            <th scope="col">enddate</th>
            <th scope="col" class="text-center">Update</th>
          </tr>
        </thead>
        <tbody>
            @foreach($calls as $call)
              <tr>

                <td>{{ $call->call_name }}</td>
                <td>{{ $call->call_description }}</td>
                <td>{{ $call->status ? 'OPEN' : 'CLOSED' }}</td>
                <td>{{ $call->startdate  }}</td>
                <td>{{ $call->enddate }}</td>
                <td align="center">
                    <a href="{{ route('calls.edit',['call' => $call]) }}" class="btn btn-info btn-lg ">
                        <span class="glyphicon glyphicon-plus-sign text-center"></span> Edit
                    </a>
               </td>

              </tr>
            @endforeach
        </tbody>
  </table>


@endsection
