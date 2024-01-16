<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilosDestino.css') }}">
    <title>Destino Tarragona</title>
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

        <h1>Pueblos sin encanto: Tarragona</h1>

    </header>


    <div class="card">
        <img src="{{ asset('images/leon.jpg') }}" alt="Imagen de destino">
        <div class="card-body">
            <span>
                <h5>Tarragona</h5>
                <p>Tarragona es una ciudad costera de la provincia de Tarragona, en la comunidad autónoma de Cataluña. Se encuentra en el noreste de España, a orillas del mar Mediterráneo.

                    <br>
                <h6 style=>fechas disponibles: del 1 de Enero al 31 Diciembre 2024</h6>
                <br>
                <h6>Precio noche media pension 45€</h6>
                </p>
            </span>
        </div>
    </div>
    </div>

</body>

</html>