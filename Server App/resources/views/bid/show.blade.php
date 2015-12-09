@extends('layouts.master')

@section('content')

    <h1>Bid</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Id</th><th>Item Id</th><th>Buyer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $bid->id }}</td> <td> {{ $bid->id }} </td><td> {{ $bid->item_id }} </td><td> {{ $bid->buyer }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection