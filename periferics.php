<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periferics</title>

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
        .boton-periferics {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF; /* Color azul del botón */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
}

        .boton-periferics:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el mouse */
            transform: scale(1.05); /* Efecto ligero de "agrandar" al pasar el mouse */
}




.imagen-abajo-izquierda {
    position: fixed;
    bottom: 20px;
    left: 20px;
    width: 150px;   /* ajusta el tamaño si quieres */
    height: auto;
    cursor: pointer;
    z-index: 1000;
    transition: transform 0.2s;
}

.imagen-abajo-izquierda:hover {
    transform: scale(1.05);
}

    </style>
</head>
<body>

<h1>PERIFERICS</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="periferics1.php" class="boton-periferics">Periferics</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="periferics2.php" class="boton-periferics">Periferics</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="periferics3.php" class="boton-periferics">Periferics</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="periferics4.php" class="boton-periferics">Periferics</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="periferics5.php" class="boton-periferics">Periferics</a></p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p><a href="periferics6.php" class="boton-periferics">Periferics</a></p>
    </div>

</div>
<a href="principal.php">
    <img src="TeclaTornar.png" class="imagen-abajo-izquierda">
</a>

</body>
</html>
