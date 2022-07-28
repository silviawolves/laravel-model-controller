<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie DB</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

</head>
<body>

    <div class="container text-center py-5">

        <div class="row row-cols-5 g-5">
            
            @foreach ($movies as $movie)
            <div class="col">

                <div class="my-card">
                    <div class="titolo">
                        <h1 class="card-title">{{ $movie['title'] }}</h1>
                    </div>
                    <div class="my-card-body">
                        <small class="my-card-subtitle">{{ $movie['original_title'] }}</small>
                        <div><span class="card-text">Nationality:</span> {{ $movie['nationality'] }}</div>
                        <div><span class="card-text">Date:</span> {{ $movie['date'] }}</div>
                        <div><span class="card-text">Vote:</span> {{ $movie['vote'] }}</div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
        
    </div>
    
</body>
</html>