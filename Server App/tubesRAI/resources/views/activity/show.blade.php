@extends('layouts.master')

@section('content')

    <h1>Activity</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nik</th><th>Name</th><th>Facility</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $activity->id }}</td> <td> {{ $activity->nik }} </td><td> {{ $activity->name }} </td><td> {{ $activity->facility }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection