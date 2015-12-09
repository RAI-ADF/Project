@extends('layouts.master')

@section('content')

    <h1>Item</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Item Id</th><th>Item Name</th><th>Item Desc</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $item->id }}</td> <td> {{ $item->item_id }} </td><td> {{ $item->item_name }} </td><td> {{ $item->item_desc }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection