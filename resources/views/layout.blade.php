<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VideogamesCritic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { background: linear-gradient(180deg,#f8fafc,#e9f0f6); min-height:100vh; }
        .brand { font-weight:700; letter-spacing:1px; }
        .hero { background: linear-gradient(90deg, rgba(63,94,251,0.08), rgba(126,58,252,0.06)); padding:40px 0; border-radius:8px; }
        .card-vg { border:0; box-shadow:0 6px 20px rgba(30,41,59,0.06); }
        .table-vg th, .table-vg td { vertical-align: middle; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand brand" href="{{ url('/') }}">VideogamesCritic</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('videogames.index') }}">Library</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('videogames.create') }}">Add Game</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>