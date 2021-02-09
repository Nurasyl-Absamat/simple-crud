@extends('layouts.app')

@section('content')

    @include('includes.errors')


    <div class="card">
        <div class="card-header">Create a new post</div>

        <div class="card-body">
            <form action="{{ route('categories.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">
                        Store Category
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
