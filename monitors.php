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

    .monitors {
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
    .boton-monitors {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF; /* Color azul del botón */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
}
.boton-volver {
    position: fixed;
    bottom: 20px;
    left: 20px;
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
</style>
</head>
<body>

<h1>MONITORS</h1>

<div class="grid">

    <div class="monitors">
        <div class="imagen"><img src=/imgp/Ultragear.svg></div>
        <p><a href="Ultragear27p.php" class="boton-monitors">LG UltraGear 27G610A-B 27"</a></p>
    </div>

    <div class="monitors">
        <div class="imagen"><img src=/imgp/MSImag.svg></div>
        <p><a href="MSImag27p.php" class="boton-monitors">MSI MAG 276CXF 27"</a></p>

    </div>

    <div class="monitors">
        <div class="imagen"><img src=/imgp/Acer23.8.svg></div>
        <p><a href="Acer23.8p.php" class="boton-monitors">Acer Nitro KG241YX3BIP 23.8"</a></p>

    </div>

    <div class="monitors">
        <div class="imagen"><img src=/imgp/Samsung27.svg></div>
        <p><a href="Samsung27p.php" class="boton-monitors">Samsung S27D302GAU 27"</a></p>

    </div>

    <div class="monitors">
        <div class="imagen"><img src=/imgp/MSImpg.svg></div>
        <p><a href="MSImpg31.5p.php" class="boton-monitors">MSI MPG 321URX QD-OLED 31.5"</a></p>

    </div>

    <div class="monitors">
        <div class="imagen"><img src=/imgp/Asrock27.svg></div>
        <p><a href="Asrock27p.php" class="boton-monitors">Asrock Phantom Gaming PG27Q15R2A 27"</a></p>

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
