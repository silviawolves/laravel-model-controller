<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie DB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center py-3">

        <div class="row g-4">
            
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie['original_title'] }}</h6>
                        <div><span class="card-text text-success">Nationality:</span> {{ $movie['nationality'] }}</div>
                        <div><span class="card-text text-success">Date:</span> {{ $movie['date'] }}</div>
                        <div><span class="card-text text-danger">Vote:</span> {{ $movie['vote'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        
    </div>
    
</body>
</html>