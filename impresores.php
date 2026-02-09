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

    .impresora {
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
.imagen-abajo-izquierda {
    position: fixed;
    bottom: 20px;
    left: 20px;
    width: 150px;       /* ajusta tamaño */
    height: auto;
    z-index: 500;      /* por debajo del botón volver si quieres */
}
</style>
</head>
<body>

<h1>IMPRESORES</h1>

<div class="grid">

    <div class="impresora">
        <div class="imagen"><img src= /imgp/PIXMA.svg></div>
        <p><a href="PIXMA.php" class="boton-impresora">Canon PIXMA ts3750i</a></p>
    </div>
    

    <div class="impresora">
        <div class="imagen"><img src= /imgp/brother.svg></div>
        <p><a href="mfc.php" class="boton-impresora">Brother mfc-l3760cdw</a></p>
    </div>

    <div class="impresora">
        <div class="imagen"><img src= /imgp/hp.svg></div>
        <p><a href="deskjet.php" class="boton-impresora">HP deskjet 2630</a></p>
    </div>

    <div class="impresora">
        <div class="imagen"><img src= /imgp/epson.svg></div>
        <p><a href="EPSON.php" class="boton-impresora">EPSON l8100</a></p>
    </div>

    <div class="impresora">
        <div class="imagen"><img src= /imgp/hp2.svg></div>
        <p><a href="laserjet.php" class="boton-impresora">HP Laserjet m209d</a></p>
    </div>

    <div class="impresora">
        <div class="imagen"><img src= /imgp/canon2.svg></div>
        <p><a href="maxify.php" class="boton-impresora">Canon maxify gx 7050</a></p>
    </div>

</div>
<a href="principal.php">
    <img src="ImprTornar.png" class="imagen-abajo-izquierda">
</a>
</body>
</html>
