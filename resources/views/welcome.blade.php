@extends('layout')

@section('content')
    <div class="hero text-center">
        <div class="container">
            <h1 class="display-4">Welcome to VideogamesCritic</h1>
            <p class="lead text-muted">Add your favourite games and browse the library.</p>
            <div class="mt-4">
                <a href="{{ route('videogames.create') }}" class="btn btn-primary btn-lg mr-2">Add Game</a>
                <a href="{{ route('videogames.index') }}" class="btn btn-outline-primary btn-lg">View Library</a>
            </div>
        </div>
    </div>
@endsection