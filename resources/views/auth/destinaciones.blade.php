<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalle del Destino</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

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
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Inicio</a>
    </button>
    <header id="header">

        <h1>Detalle del Destino</h1>

    </header>

    <div class="container">

        <div class="card">
            <img src="{{ asset('images/maspullols.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Maspujols</h5>
                <br>
                <button type="button" class="btn btn-primary">
                    <a href="{{ route('destino1') }}" class="btn btn-primary">
                        Mas info
                    </a>
                </button>
            </div>
        </div>

       

        <div class="card">
            <img src="{{ asset('images/galicia.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Cudillero</h5>
               <br>
                <button type="button" class="btn btn-primary">
                    <a href="{{ route('destino2') }}" class="btn btn-primary">
                        Mas info
                    </a>
                </button>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/leon.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Tarragona</h5>
                <p>Tarragona es una ciudad costera de la provincia de Tarragona,
                    en la comunidad autónoma de Cataluña. Se encuentra en el noreste
                    de España, a orillas del mar Mediterráneo.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/cabarceno.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Cabárceno</h5>
                <p>
                    Cabárceno , añadir text texto texto

                </p>
            </div>
        </div>


        <div class="card">
            <img src="{{ asset('images/Gigantes.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Los Gigantes</h5>
                <p>
                    Los Gigantes , añadir text texto texto
                </p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/Monfragüe.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Parque Nacional de Monfragüe, Cáceres</h5>
                <p>
                Monfragüe , añadir text texto texto
                </p>
            </div>
        </div>


    </div>



</body>

</html>
