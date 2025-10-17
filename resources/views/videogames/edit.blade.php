@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-vg p-4">
                <h2 class="mb-3">Edit videogame</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('videogames.update', $videogame) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter videogame title" value="{{ old('title', $videogame->title) }}">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input type="text" name="genre" class="form-control" id="genre" placeholder="Enter videogame genre" value="{{ old('genre', $videogame->genre) }}">
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform</label>
                        <input type="text" name="platform" class="form-control" id="platform" placeholder="Enter videogame platform" value="{{ old('platform', $videogame->platform) }}">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('videogames.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
