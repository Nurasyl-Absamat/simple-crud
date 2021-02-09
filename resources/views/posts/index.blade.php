@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Published Posts</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Title
                </th>
                <th>
                    Edit
                </th>

                <th>
                    Delete
                </th>
                </thead>
                <tbody>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-info">
                                    @include('icons.pencilIco')
                                </a></td>
                            <td>
                                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}"
                                      method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        @include('icons.trashIco')
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <td colspan="5" class="text-center text-danger">No Posts yet</td>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
