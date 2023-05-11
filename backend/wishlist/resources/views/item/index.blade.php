@extends('layouts.master')

@section('body-content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Seller</th>
            <th scope="col">Price</th>
            <th scope="col">Created at</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->seller}}</td>
            <td>{{number_format($item->price,2)}}</td>
            <td>{{$item->created_at}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
{{ $items->links()}}

@endsection