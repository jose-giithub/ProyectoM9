<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilosDestino.css') }}">
    <title>Destino Cabárceno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #eae8e0;
        }

        .card {
            background-color: #FFE57F;
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            margin: 0 auto;
            margin-top: 0;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <button type="button" class="btn btn-primary" id="botonRetornar">
        <a href="{{ route('destinaciones') }}" class="btn btn-primary">Destinaciones</a>
    </button>
    <header id="header">

        <h1>Pueblos sin encanto: Cabárceno</h1>

    </header>


    <div class="card">
        <img src="{{ asset('images/agila.jpg') }}" alt="Imagen de destino">
        <div class="card-body">
            <span>
            <h5>Cabárceno</h5>
            <p>Parque de la Naturaleza de Cabárceno es un zoológico ubicado en Cantabria, España. Es un parque único en el mundo,
                ya que sus animales viven en semilibertad, en un entorno natural de 750 hectáreas.
                <br>
                En Cabárceno se pueden ver más de 1.200 animales de 200 especies diferentes, entre las que se encuentran leones,
                tigres, elefantes, jirafas, hipopótamos, osos, lobos, etc.
                <br>
            <h6 style=>fechas disponibles: del 1 de Enero al 31 Diciembre 2024</h6>
            <br>
            <h6>Precio noche media pension con entrada 105€</h6>
            </p>
            </span>
        </div>
    </div>
    </div>

</body>

</html>