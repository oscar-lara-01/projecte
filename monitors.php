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
     
        .boton-vovler {
    position: fixed;
    bottom: 20px;
    right: 20px;
    text-decoration: none;
    width: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    z-index: 1000;
}

.boton-volver .pantalla {
    width: 80px;
    height: 45px;
    background-color: #1e1e1e;
    border: 3px solid #555;
    border-radius: 4px;
    color: #00ff99;
    font-size: 12px;
    font-family: monospace;

    display: flex;
    align-items: center;
    justify-content: center;
}

.boton-volver .base {
    width: 30px;
    height: 6px;
    background-color: #555;
    margin-top: 4px;
    border-radius: 0 0 4px 4px;
}

.boton-volver:hover .pantalla {
    background-color: #000;
}


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
    <span class="base"></span>
</a>


</body>
</html>
