@extends('layouts.app')

@section('content')

    @include('includes.errors')

    <div class="card">
        <div class="card-header">Edit post</div>

        <div class="card-body">
            <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
                @method('PUT')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category">Select Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)

                            <option value="{{ $category->id}}"
                                    @if ($post->category_id == $category->id)
                                    selected
                                @endif
                            >{{ $category->title }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{ $post->description }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit ">
                            Update Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


