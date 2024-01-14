<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de destinos</title>
</head>
<body>
    <div class="container">
        <h1>Lista de destinos</h1>

        <div class="row">
            @foreach($destinations as $destination)
                <div class="col-md-4">
                    <div class="card">
                    <img class="card-img-top" src="{{ asset('images/molinos.jpg') }}" alt="Imagen de {{ $destination->name }}">

                        <div class="card-body">
                            <h5 class="card-title">{{ $destination->name }}</h5>
                            <p class="card-text">{{ $destination->description }}</p>
                            <a href="#" class="btn btn-primary">Ver detalle</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>