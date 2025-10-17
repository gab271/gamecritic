@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Library</h1>
        <a href="{{ route('videogames.create') }}" class="btn btn-sm btn-primary">Add new</a>
    </div>

    @if($videogames->isEmpty())
        <div class="alert alert-info">No videogames yet. <a href="{{ route('videogames.create') }}">Add the first one</a>.</div>
    @else
        <div class="card card-vg p-3">
            <table class="table table-striped table-vg mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Platform</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videogames as $videogame)
                        <tr>
                            <td>{{ $videogame->title }}</td>
                            <td>{{ $videogame->genre }}</td>
                            <td>{{ $videogame->platform }}</td>
                            <td class="text-right">
                                <a href="{{ route('videogames.edit', $videogame) }}" class="btn btn-sm btn-outline-primary mr-2">Edit</a>
                                <form action="{{ route('videogames.destroy', $videogame) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this videogame?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
