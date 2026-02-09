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

    .periferics{
        text-align: center;
        border: 1px solid black;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .imagen {
        width: 100%;
        height: 200px; 
        border: 1px solid black;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .imagen img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
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

    <div class="periferics">
        <div class="imagen"><img src=/imgp/LOGG502.svg></div>
        <p><a href="LOGG502.php" class="boton-periferics">Logitech G502</a></p>

    </div>

    <div class="periferics">
        <div class="imagen"><img src=/imgp/Razerv3.svg></div>
        <p><a href="Razerv3.php" class="boton-periferics">Razer viper v3 pro</a></p>
    </div>

    <div class="periferics">
        <div class="imagen"><img src=/imgp/LOGPRO2.svg></div>
        <p><a href="LOGPRO2.php" class="boton-periferics">Logitech G PRO X SuperLight 2</a></p>
    </div>

    <div class="periferics">
        <div class="imagen"><img src=/imgp/Corsairk70.svg></div>
        <p><a href="Corsairk70.php" class="boton-periferics">Corsair Core K70</a></p>
    </div>

    <div class="periferics">
        <div class="imagen"><img src=/imgp/RazerBWV3mini.svg></div>
        <p><a href="RazerBWVmini.php" class="boton-periferics">Razer BlackWidow V3 mini</a></p>
    </div>

    <div class="periferics">
        <div class="imagen"><img src=/imgp/LOGG522.svg></div>
        <p><a href="LOGG522.php" class="boton-periferics">Logitech G522 LightSpeed</a></p>
    </div>

</div>
<a href="principal.php">
    <img src="TeclaTornar.png" class="imagen-abajo-izquierda">
</a>

</body>
</html>
