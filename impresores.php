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
        .boton-impresora {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF; /* Color azul del botón */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
}

        .boton-impresora:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el mouse */
            transform: scale(1.05); /* Efecto ligero de "agrandar" al pasar el mouse */
}


.boton-volver {
    position: fixed;
    bottom: 20px;
    left: 20px;
    width: 90px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    z-index: 1000;
}

.boton-volver .cuerpo {
    width: 90px;
    height: 30px;
    background-color: #444;
    border-radius: 6px 6px 3px 3px;
}

.boton-volver .papel {
    width: 70px;
    height: 30px;
    background-color: #fff;
    color: #000;
    font-size: 12px;
    font-family: monospace;
    border: 1px solid #ccc;
    margin-top: -5px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.boton-volver .salida {
    width: 90px;
    height: 12px;
    background-color: #333;
    border-radius: 0 0 6px 6px;
}

.boton-volver:hover .cuerpo {
    background-color: #222;
}


    </style>
</head>
<body>

<h1>IMPRESORES</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen"><img src= /imgp/PIXMA.svg></div>
        <p><a href="impresora1.php" class="boton-impresora">Canon PIXMA ts3750i</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src= /imgp/brother.svg></div>
        <p><a href="impresora2.php" class="boton-impresora">Brother mfc-l3760cdw</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src= /imgp/hp.svg></div>
        <p><a href="impresora3.php" class="boton-impresora">HP deskjet 2630</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src= /imgp/epson.svg></div>
        <p><a href="impresora4.php" class="boton-impresora">EPSON l8100</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src= /imgp/hp2.svg></div>
        <p><a href="impresora5.php" class="boton-impresora">HP laserjet m209d</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="/impresoras-pag/impresora6.php" class="boton-impresora">Impresora 6</a></p>
    </div>

</div>
<a href="principal.php" class="boton-volver">
    <span class="cuerpo"></span>
    <span class="papel">Volver</span>
    <span class="salida"></span>
</a>

</body>
</html>
