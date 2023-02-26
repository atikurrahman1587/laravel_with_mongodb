@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Authors') }}</div>

            <div class="card-body">
               <a href="{{ route('authors.create') }}" class="btn btn-primary">Create New Author</a>
                <div class="mt-3">
                    <h3>List Of Authors</h3>
                    <ul class="list-group">
                        @foreach($authors as $item)
                            <li class="list-group-item">{{ $item->name }} | Total Books: {{ count($item->books) }}
                                <span class="float-end d-flex">
                                    <a href="{{ route('authors.edit',[$item]) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                    <form action="{{ route('authors.destroy',[$item]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
