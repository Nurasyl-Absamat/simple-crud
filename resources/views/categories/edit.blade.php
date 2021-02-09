@extends('layouts.app')

@section('content')

    @include('includes.errors')


    <div class="card">
        <div class="card-header">Update category: {{ $category->title }}</div>

        <div class="card-body">
            <form action="{{ route('categories.update', ['category' => $category->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $category->title }}" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">
                        Update Category
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
