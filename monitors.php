<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Monitors</title>

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

            /* Solo para centrar texto de prueba */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #666;
        }
        .boton-monitor {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF; /* Color azul del botón */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
}

        .boton-monitor:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el mouse */
            transform: scale(1.05); /* Efecto ligero de "agrandar" al pasar el mouse */
        }
     





.boton-volver {
    position: fixed;
    bottom: 20px;
    right: 20px;
    text-decoration: none;
    display: flex;
    flex-direction: column; /* pantalla arriba, soporte abajo */
    align-items: center; /* centrado horizontal */
    cursor: pointer;
    z-index: 1000;
}

.boton-volver .pantalla {
    width: 80px;
    height: 45px;
    background-color: #1e1e1e;
    border: 3px solid #555;
    border-radius: 4px 4px 0 0;
    color: #00ff99;
    font-size: 12px;
    font-family: monospace;

    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2; /* sobre el soporte */
}

/* Soporte que contiene el brazo vertical y la base horizontal */
.boton-volver .soporte {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: -3px; /* pega con la pantalla */
}

/* Brazo vertical más largo */
.boton-volver .soporte .brazo {
    width: 6px;
    height: 30px; /* brazo más largo */
    background-color: #555;
    border-radius: 2px;
}

/* Base horizontal ajustada */
.boton-volver .soporte .base {
    width: 40px;
    height: 6px;
    background-color: #555;
    margin-top: 0; /* base más cerca del brazo */
    border-radius: 2px;
}

/* Hover opcional */
.boton-volver:hover .pantalla {
    background-color: #000;
}


.
</style>
</head>
<body>

<h1>MONITORS</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen"><img src= /img/monitor1.webp></div>
        <p><a href="monitor1.php" class="boton-monitor">Monitor norm</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="monitor2.php" class="boton-monitor">Monitor</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="monitor3.php" class="boton-monitor">Monitor</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="monitor4.php" class="boton-monitor">Monitor</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="monitor5.php" class="boton-monitor">Monitor</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="monitor6.php" class="boton-monitor">Monitor</a></p>
    </div>

</div>
<a href="principal.php" class="boton-volver">
    <span class="pantalla">Volver</span>
    <span class="soporte">
        <span class="brazo"></span>
        <span class="base"></span>
    </span>
</a>




</body>
</html>
