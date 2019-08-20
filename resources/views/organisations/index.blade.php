@extends('layouts.app')

@section('title', 'Organisations List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Organisation List</h1>
        </div>
    </div>


        <div class="row">
            <div class="col-12">
                <p><a href="{{ route('organisations.create') }}">Add New Organisation</a></p>
            </div>
        </div>



    <table class="table table-bordered text-align: center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">EMERTIMI</th>
            <th scope="col">PIC</th>
            <th scope="col">STATUS</th>
            <th scope="col" class="text-center">UPDATE</th>
          </tr>
        </thead>
        <tbody>
            @foreach($organisations as $organisation)
              <tr>

                <td>{{ $organisation->organisation_name }}</td>
                <td>{{ $organisation->pic }}</td>
                <td>{{ $organisation->status ? 'AKTIV' : 'JOAKTIV' }}</td>
                <td align="center">
                    <a href="{{ route('organisations.edit',['organisation' => $organisation]) }}" class="btn btn-info btn-lg ">
                        <span class="glyphicon glyphicon-plus-sign text-center"></span> Edit
                    </a>
               </td>

              </tr>
            @endforeach
        </tbody>
  </table>


@endsection
