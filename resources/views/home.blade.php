<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Ciao questi sono i film che mi piacciono! <i class="fa-solid fa-film"></i></h1>
    <div class="container">
        <div class="row row-cols-5">
                @foreach ($movies as $movie)
                <div class="col g-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">Titolo originale: {{$movie->original_title}}</p>
                            <p>Data: {{$movie->date}}<br /> Voto medio: {{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</body>
</html>