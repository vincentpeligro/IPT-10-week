
@extends('layouts.app')

@section('content')


    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Unit Type</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($units as $unit)
                    <tr>
                        <td>{{$unit->unit_type }}</td>
                        <td>{{$unit->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
