@extends('layouts.app')

@section('content')



    <div class="card">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Category title
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
                </thead>
                <tbody>
                @if ($categories->count() > 0)
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{ $category->title }}
                            </td>
                            <td>
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-sm btn-info">
                                    @include('icons.pencilIco')
                                </a>
                            </td>

                            <td>
                                <form action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                      method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        @include('icons.trashIco')
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <td colspan="5" class="text-center text-danger">No Categories yet</td>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
