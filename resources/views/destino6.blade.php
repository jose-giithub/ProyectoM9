<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilosDestino.css') }}">
    <title>Destino Los Monfragüe</title>
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

        <h1>Pueblos sin encanto: Parque Nacional de Monfragüe</h1>

    </header>


    <div class="card">
        <img src="{{ asset('images/Monfragüe2.jpg') }}" alt="Imagen de destino">
        <div class="card-body">
            <span><!-- Cuando pasas el raton por encima se muestra la info -->
                <h5>Parque Nacional de Monfragüe</h5>
                <p>
                    El Parque Nacional de Monfragüe es un espacio natural protegido ubicado en la provincia de Cáceres,
                    en España. Fue declarado parque nacional en 2007, y es uno de los espacios naturales más importantes
                    de la península ibérica.
                    <br>
                    El parque tiene una superficie de 18.396 hectáreas, y está formado por un mosaico de ecosistemas,
                    que incluyen bosques, dehesas, ríos y lagunas. Es un lugar de gran biodiversidad, y alberga una gran
                    variedad de flora y fauna.
                </p>

                <br>
                <h6 style=>fechas disponibles: De Mayo a Septiembre</h6>
                <br>
                <h6>Precio noche media pension 135€</h6>
                </p>
            </span>
        </div>
    </div>
    </div>

</body>

</html>