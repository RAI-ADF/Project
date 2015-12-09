@extends('layouts.master')

@section('content')

    <h1>News <a href="{{ route('news.create') }}" class="btn btn-primary pull-right btn-sm">Add New News</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nik</th><th>Title</th><th>Content</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($news as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/news', $item->id) }}">{{ $item->nik }}</a></td><td>{{ $item->title }}</td><td>{{ $item->content }}</td>
                    <td>
                        <a href="{{ route('news.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['news.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $news->render() !!} </div>
    </div>

@endsection
