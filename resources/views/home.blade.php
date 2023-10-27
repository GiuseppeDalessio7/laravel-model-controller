<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="films">
        @forelse ($movies as $movie)
            <section>
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <h2>Numero Film: {{ $movie->id }}</h2>
                        <div class="col">
                            <h2 class="text-center">Movie Title</h2>
                            <div class="card shadow border-0">
                                <img class=" card-img-top" src="" alt="" srcset="">
                                <div class="card-body text-center">
                                    <span>Original Title<span>
                                </div>
                                <div class="card-body text-center">
                                    <span>Language<span>
                                </div>
                                <div class="card-body text-center">
                                    <span>Release Date<span>
                                </div>
                                <div class="card-body text-center">
                                    <span>Vote<span> <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="text-center">{{ $movie->title }}</h2>
                            <div class="card shadow border-0">
                                <img class=" card-img-top" src="" alt="" srcset="">
                                <div class="card-body text-center">
                                    {{ $movie->original_title }}
                                </div>
                                <div class="card-body text-center">
                                    {{ $movie->nationality }}
                                </div>
                                <div class="card-body text-center">
                                    {{ $movie->date }}
                                </div>
                                <div class="card-body text-center">
                                    {{ $movie->vote }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <p></p>

        @empty
            <p>Nessun Film.</p>
        @endforelse





    </div>



    <main class="bg-light">

    </main>

</body>

</html>
