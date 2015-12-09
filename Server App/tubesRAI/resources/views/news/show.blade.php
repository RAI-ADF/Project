@extends('layouts.master')

@section('content')

    <h1>News</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nik</th><th>Title</th><th>Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $news->id }}</td> <td> {{ $news->nik }} </td><td> {{ $news->title }} </td><td> {{ $news->content }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection