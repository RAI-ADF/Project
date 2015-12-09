@extends('template')

@section('content')

    <h1>Items <a href="{{ route('item.create') }}" class="btn btn-primary pull-right btn-sm">Add New Item</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Item Id</th>
                    <th>Item Name</th>
                    <th>Seller</th>
                    <th>Last Bid</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($items as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/item', $item->id) }}">{{ $item->item_id }}</a></td>
                    <td>{{ $item->item_name }}</td>
                    <td>{{ $item->seller }}</td>
                    <td>{{ $item->last_bid }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{route('item.edit',$item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['item.destroy', $item->item_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $items->render() !!} </div>
    </div>

@endsection
