@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Edit Book') }}</div>

            <div class="card-body">
                <div class="mt-3">
                    <form action="{{ route('books.update',$book) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $book->name }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="pages">Page</label>
                            <input type="text" class="form-control" name="pages" value="{{ $book->pages }}" id="pages">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $book->price }}" id="price">
                        </div>
                        <div class="form-group">
                            <label for="author_id">Author</label>
                            <select class="form-control" name="author_id" id="author_id">
                                @foreach($authors as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $book->author_id ? 'selected' : ''}}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
