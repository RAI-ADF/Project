@extends('layouts.master')

@section('content')

    <h1>Activities <a href="{{ route('activity.create') }}" class="btn btn-primary pull-right btn-sm">Add New Activity</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nik</th><th>Name</th><th>Facility</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($activities as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/activity', $item->id) }}">{{ $item->nik }}</a></td><td>{{ $item->name }}</td><td>{{ $item->facility }}</td>
                    <td>
                        <a href="{{ route('activity.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['activity.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $activities->render() !!} </div>
    </div>

@endsection
