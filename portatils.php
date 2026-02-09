<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portatils</title>

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
        .boton-portatil {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF; /* Color azul del botón */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
}

        .boton-portatil:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el mouse */
            transform: scale(1.05); /* Efecto ligero de "agrandar" al pasar el mouse */
}


.boton-volver {
    position: fixed;
    bottom: 20px;
    left: 20px; /* lo pongo a la izquierda para no chocar con el monitor */
    text-decoration: none;
    width: 90px;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    z-index: 1000;
}

.boton-volver .pantalla {
    width: 90px;
    height: 50px;
    background-color: #1b1b1b;
    border: 3px solid #444;
    border-radius: 4px;
    color: #4cffd8;
    font-size: 12px;
    font-family: monospace;

    display: flex;
    align-items: center;
    justify-content: center;
}

.boton-volver .teclado {
    width: 100px;
    height: 10px;
    background-color: #555;
    margin-top: 3px;
    border-radius: 0 0 6px 6px;
}

.boton-volver:hover .pantalla {
    background-color: #000;
}

    </style>
</head>
<body>

<h1>PORTATILS</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="portatil1.php" class="boton-portatil">Portatil</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="portatil2.php" class="boton-portatil">Portatil</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="portatil3.php" class="boton-portatil">Portatil</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="portatil4.php" class="boton-portatil">Portatil</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="portatil5.php" class="boton-portatil">Portatil</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="portatil6.php" class="boton-portatil">Portatil</a></p>
    </div>

</div>
<a href="principal.php" class="boton-volver">
    <span class="pantalla">Volver</span>
    <span class="teclado"></span>
</a>

</body>
</html>
