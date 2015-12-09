@extends('template')

@section('content')

    <h1>Bids <a href="{{ route('bid.create') }}" class="btn btn-primary pull-right btn-sm">Add New Bid</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Id</th>
                    <th>Item Id</th>
                    <th>Last Bid</th>
                    <th>Buyer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($bids as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/bid', $item->id) }}">{{ $item->id }}</a></td>
                    <td>{{ $item->item_id }}</td>
                    <td>{{ $item->last_bid }}</td>
                    <td>{{ $item->buyer }}</td>
                    <td>
                        <a href="{{ route('bid.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['bid.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $bids->render() !!} </div>
    </div>

@endsection
