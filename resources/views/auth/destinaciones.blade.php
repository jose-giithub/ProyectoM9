<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalle del Destino</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header id="header">
        <h1>Detalle del Destino</h1>
    </header>

    <div class="container">

        <div class="card">
            <img src="{{ asset('images/maspullols.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Maspujols</h5>
                <div class="buton">
                    <button>VIEW DETAIL</button>
                </div>
                <div>
                    <a href="{{ route('destino') }}" class="btn btn-primary">
                        Jugar a SQWORD
                    </a>
                </div>
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
            <img src="{{ asset('images/galicia.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Cudillero</h5>
                <p>
                    Cudillero es un pueblo costero de la comarca del Oriente de Asturias,
                    en España. Se encuentra en la costa del Cantábrico, a unos 50 kilómetros de Oviedo.
                </p>
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
            <img src="{{ asset('images/galicia.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Cudillero</h5>
                <p>
                    Cudillero es un pueblo costero de la comarca del Oriente de Asturias,
                    en España. Se encuentra en la costa del Cantábrico, a unos 50 kilómetros de Oviedo.
                </p>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/galicia.jpg') }}" alt="Imagen de destino">
            <div class="card-body">
                <h5>Cudillero</h5>
                <p>
                    Cudillero es un pueblo costero de la comarca del Oriente de Asturias,
                    en España. Se encuentra en la costa del Cantábrico, a unos 50 kilómetros de Oviedo.
                </p>
            </div>
        </div>
    </div>

</body>

</html>
