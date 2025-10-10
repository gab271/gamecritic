@extends('layout')

@section('content')
    <h1>Create a new Videogames</h1>
    <form method="POST" action="{{ route('videogames.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="tile" class="form-control" id="title" placeholder="Enter videogame title">
        </div>
        <div class="form-group">
            <label for="genre">genre</label>
            <input type="text" name="genre" class="form-control" id="genre" placeholder="Enter videogame genre">
        </div>
        <div class="form-group">
            <label for="platform">platform</label>
            <input type="text" name="platform" class="form-control" id="platform" placeholder="Enter videogame platform">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('videogames.index')}}">Back to the list of Videogames</a>
@endsection