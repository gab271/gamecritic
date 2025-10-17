@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Videogames Reviews</h1>
        <div>
            <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary mr-2">Home</a>
            <a href="{{ route('videogames.create') }}" class="btn btn-sm btn-primary">Add new</a>
        </div>
    </div>

    @if($videogames->isEmpty())
        <div class="alert alert-info">No videogames in the list <a href="{{ route('videogames.create') }}">Please add one</a>.</div>
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
                                <a href="{{ route('videogames.edit', $videogame) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                                <form method="POST" action="{{ route('videogames.destroy', $videogame) }}" style="display:inline" onsubmit="return confirm('Delete "' + '{{ $videogame->title }}' + '"?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection