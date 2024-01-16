<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalle del Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #BBDEFB;
        }

        header {
            padding-top: 50px;
            text-align: center;
            margin-bottom: 2rem;

        }

        #botonRetornar {
            margin-top: 20px;
            margin-right: 20px;
            display: block;
            float: right;
        }

        .container {

            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            background-color: #BBDEFB;
        }

        .card {
            margin: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 250px;
            /* Ancho fijo para cada tarjeta */
            height: 800px;
            /* Altura fija para cada tarjeta */
            background-color: #FFE57F;
        }

        .card img {
            width: 100%;
            height: 600px;
            /* Altura fija para las imágenes */
            object-fit: cover;
            /* Asegura que la imagen cubra el área sin distorsionarse */
        }

        .card-body {
            padding: 1rem;
            text-align: center;
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
                <div class="buton">
                    <button>Ver mas info</button>
                </div>
                <p>

                    <!-- Maspujols es un pequeño pueblo de la comarca del Baix Camp,
                    en la provincia de Tarragona. Se encuentra a unos 20 kilómetros de Reus
                    y a unos 50 kilómetros de Tarragona. -->
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
    </div>

</body>

</html>