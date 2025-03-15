<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

@php
    // dd($movies); //collection
@endphp

<body>
    <main class="main py-5">

        <div class="container">
            <div class="row title">
                <div class="col-12 text-center mb-3">
                    <h1>Movies</h1>
                </div>
            </div>
            <div class="row row-gap-3">
                @foreach ($movies as $movie)
                    <div class="col col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <h2>{{ $movie->original_title }}</h2>
                            <div class="card-body">

                                <p class="subtitle">{{ $movie->title }}</p>
                                <p>{{ $movie->description }}</p>
                                <p>Data di uscita: {{ $movie->date }}</p>
                                <p>Voto: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
