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

</style>
</head>
<body>

<h1>PORTATILS</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen"><img src=/imgp/acergaming.svg></div>
        <p><a href="Nitro v15.php" class="boton-portatil">Acer Nitro v15</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src=/imgp/msikatana17.svg></div>
        <p><a href="Katana 17.php" class="boton-portatil">MSI Katana 17</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src=/imgp/hpvictus6.svg></div>
        <p><a href="Victus 6.php" class="boton-portatil">HP Victus 6</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src=/imgp/gigabytea16.svg></div>
        <p><a href="Gigabyte a16.php" class="boton-portatil">Gigabyte Gaming a16</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src=/imgp/hpomen16.svg></div>
        <p><a href="Omen 16.php" class="boton-portatil">HP Omen 16</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src=/imgp/lenovolegion5.svg></div>
        <p><a href="Legion 5.php" class="boton-portatil">Lenovo Legion 5</a></p>
    </div>

</div>

</body>
</html>
