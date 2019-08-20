@extends('layouts.app')

@section('title', 'Application List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Application List</h1>
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
            <th scope="col" class="text-center">Apply</th>
            <th scope="col" class="text-center">AppList</th>
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
                    <a href="{{ route('callapplications.create',['call' => $call]) }}" class="btn btn-info btn-lg ">
                        <span class="glyphicon glyphicon-plus-sign text-center"></span> Apply
                    </a>
               </td>
               <td align="center">
                <a href="{{ route('callapplications.aplikimet',['call' => $call]) }}" class="btn btn-info btn-lg ">
                    <span class="glyphicon glyphicon-plus-sign text-center"></span> App.List
                </a>
                </td>


              </tr>
            @endforeach
        </tbody>
  </table>


@endsection
