<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino Maspujols</title>
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
            flex-wrap: wrap;
            background-color: #BBDEFB;
        }

        .card {
            margin: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 450px;
            /* Ancho fijo para cada tarjeta */
            height: 800px;
            /* Altura fija para cada tarjeta */
            background-color: #FFE57F;

            position: relative;
            margin: 0 auto;
            /* Center horizontally */
            width: 50%;
            /* Set a reasonable width to prevent overflow */
        }


        .card img {
            width: 100%;
            height: 200px;
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
        <a href="{{ route('destinaciones') }}" class="btn btn-primary">Destinaciones</a>
    </button>
    <header id="header">

        <h1>Pueblos sin encanto Maspujols</h1>

    </header>


    <div class="card">
        <img src="{{ asset('images/maspullols.jpg') }}" alt="Imagen de destino">
        <div class="card-body">
            <h5>Maspujols</h5>
            <p>Tarragona es una ciudad costera de la provincia de Tarragona,
                en la comunidad autónoma de Cataluña. Se encuentra en el noreste
                de España, a orillas del mar Mediterráneo.
            </p>
        </div>
    </div>
    </div>

</body>

</html>