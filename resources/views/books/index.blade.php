@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Books') }}</div>

            <div class="card-body">
               <a href="{{ route('books.create') }}" class="btn btn-primary">Create New Book</a>
                <div class="mt-3">
                    <h3>List Of Book</h3>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Pages</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                        @foreach($books as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>৳{{ $item->pages }}</td>
                            <td>{{ $item->author->name }}</td>
                            <td class="float-end d-flex">
                                <a href="{{ route('books.edit',[$item]) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{ route('books.destroy',[$item]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
