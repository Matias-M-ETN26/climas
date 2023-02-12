    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet">
        <title>Clima</title>
        <link rel="shortcut icon" href="img/nube.png" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="js/clima.js"></script>
        <script>clima(0,0);</script>
    </head>

    <body>
        <div class="lugares-contenedor">
            <a href="javascript:clima(0,0)">
                <div class="lugares">AR, Buenos Aires</div>
            </a>
            <a href="javascript:clima(0,1)">
                <div class="lugares">UR, Cordon</div>
            </a>
            <a href="javascript:clima(0,2)">
                <div class="lugares">PE, Lima</div>
            </a>
            
        </div>
        <div class="contenedor-principal" id="contenedor-principal">
            <div class="dia-seleccionado-contenedor" id="dia-seleccionado">
                <div class="clima">
                    <div class="alinear" id="img-seleccionado"></div>
                    <div class="temp-promedio alinear" id="temp-promedio"></div>
                    <div class="celsius alinear" id="celsius"></div>
                    <div class="info-clima alinear">
                        <div class="precipitaciones" id="precipitaciones"></div>
                        <div class="humedad" id="humedad"></div>
                        <div class="viento" id="viento"></div>
                    </div>
                </div>
                <div class="info">
                    <div class="localidad" id="localidad"></div>
                    <div class="dia l-gris" id="dia-semana"></div>
                    <div class="clima-info l-gris" id="clima-info"></div>
                </div>
            </div>
            <div class="dias-contenedor" id="dias-contenedor"></div>
        </div>
        <div class="cargando" id="cargando">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </body>

    </html>