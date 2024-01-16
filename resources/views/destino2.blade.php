<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilosDestino.css') }}">
    <title>Destino Cudillero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #eae8e0;
        }

        .card {
            background-color: #FFE57F;
        }
    </style>
</head>

<body>
    <button type="button" class="btn btn-primary" id="botonRetornar">
        <a href="{{ route('destinaciones') }}" class="btn btn-primary">Destinaciones</a>
    </button>
    <header id="header">

        <h1>Pueblos sin encanto: Cudillero</h1>

    </header>


    <div class="card">
        <img src="{{ asset('images/maspullols.jpg') }}" alt="Imagen de destino">
        <div class="card-body">
            <h5>Cudillero</h5>
            <p>Cudillero es un pueblo costero de la comarca del Oriente de Asturias,
                 en España. Se encuentra en la costa del Cantábrico, a unos 50 kilómetros de Oviedo.

                <br>
            <h6 style=>fechas disponibles: del 1 de Mayo al 31 Octubre 2024</h6>
            <br>
            <h6>Precio noche media pension 85€</h6>
            </p>
        </div>
    </div>
    </div>

</body>

</html>