<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilosDestino.css') }}">
    <title>Destino Los Gigantes</title>
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

        <h1>Pueblos sin encanto: Los Gigantes</h1>

    </header>


    <div class="card">
        <img src="{{ asset('images/Gigantes.jpg') }}" alt="Imagen de destino">
        <div class="card-body">
            <h5>Los Gigantes</h5>
            <p>

                Los Gigantes son un conjunto de acantilados volcánicos ubicados en la costa oeste de Tenerife, España.
                 Su nombre proviene del término canario "gigantes", que se refiere a su gran tamaño. Los acantilados alcanzan una altura de hasta 600 metros sobre el nivel del mar,
                y son una de las atracciones turísticas más populares de la isla.
                <br>
                Los Gigantes se formaron hace millones de años, cuando la isla de Tenerife estaba en proceso de formación. 
                La lava que emanaba de los volcanes se solidificó y formó los acantilados. La erosión del viento y el mar 
                ha moldeado su forma actual, creando formas y texturas únicas.
            </p>

            <br>
            <h6 style=>fechas disponibles: Todo el año</h6>
            <br>
            <h6>Precio noche media pension 86€</h6>
            </p>
        </div>
    </div>
    </div>

</body>

</html>