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
    </style>
</head>
<body>

<h1>PERIFERICS</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p>Periferic 1</p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p>Periferic 2</p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p>Periferic 3</p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p>Periferic 4</p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p>Periferic 5</p>
    </div>

    <div class="portatil">
        <div class="imagen">Imagen</div>
        <p>Periferic 6</p>
    </div>

</div>

</body>
</html>
