<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Impresores</title>

    <style>
        body {
            margin: 0;
            padding: 40px;
            background: white;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            letter-spacing: 3px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 900px;
            margin: 0 auto;
        }

        .portatil {
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }

        .imagen {
            width: 100%;
            height: 150px;
            border: 1px solid black;
            margin-bottom: 15px;

            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #666;
        }
        .imagen {
            width: 300px; /* O el tamaño que desees para el recuadro */
            height: 200px; /* Opcional: si quieres una altura fija */
            overflow: hidden; /* Esto corta lo que sobresalga si no quieres que se vea */
        }

        .imagen img {
            width: 100%;      /* Obliga a la imagen a ocupar el ancho del div */
            height: 100%;     /* Obliga a la imagen a ocupar el alto del div */
            object-fit: contain; /* Mantiene la proporción sin deformar la imagen */
        }

    </style>
</head>
<body>

<h1>IMPRESORES</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen"><img src= /imgp/PIXMA.svg></div>
        <p>Canon PIXMA ts3750i</p>
    </div>
    

    <div class="portatil">
        <div class="imagen"><img src= /imgp/brother.svg></div>
        <p>Brother mfc-l3760cdw</p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src= /imgp/hp.svg></div>
        <p>HP deskjet 2630</p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src= /imgp/epson.svg></div>
        <p>EPSON l8100</p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src= /imgp/hp2.svg></div>
        <p>HP laserjet m209d</p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p>Impresora 6</p>
    </div>

</div>

</body>
</html>
