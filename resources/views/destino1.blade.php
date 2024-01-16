<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilosDestino.css') }}">
    <title>Destino Maspujols</title>
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

        <h1>Pueblos sin encanto: Maspujols</h1>

    </header>


    <div class="card">
        <img src="{{ asset('images/maspullols.jpg') }}" alt="Imagen de destino">
        <div class="card-body">
            <span>
                <h5>Maspujols</h5>
                <p>Maspujols es un pueblo pequeño y tranquilo de la comarca del Baix Camp,
                    en la provincia de Tarragona. Se encuentra en el noreste de España,
                    a orillas del río Brugent. Tiene una población de unos 850 habitantes y
                    una historia que se remonta a la época romana..

                    <br>
                <h6 style=>fechas disponibles: del 1 de enero al 31 diciembre 2024</h6>
                <br>
                <h6>Precio noche media pension 65€</h6>
                </p>
            </span>
        </div>
    </div>
    </div>

</body>

</html>