<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portátiles</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(
                135deg,
                #000000 0%,
                #1a1a1a 35%,
                #3f3f3f 70%,
                #7a7a7a 100%
            );
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 36px;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
            margin-bottom: 60px;
        }

        /* Tarjeta */
        .monitor-card {
            background: #1b1b1b;
            border-radius: 18px;
            padding: 22px;
            text-align: center;
            box-shadow: 0 12px 35px rgba(0,0,0,0.6);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .monitor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 50px rgba(0,0,0,0.8);
        }

        /* Vitrina clara para imágenes */
        .imagen {
            width: 100%;
            height: 200px;
            margin-bottom: 20px;
            background: #ffffff;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: inset 0 0 0 1px #ddd, 0 8px 20px rgba(0,0,0,0.25);
            overflow: hidden;
        }

        .imagen img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            transition: transform 0.4s ease;
        }

        .monitor-card:hover .imagen img {
            transform: scale(1.05);
        }

        .boton-monitors {
            display: inline-block;
            margin-top: 10px;
            padding: 15px 26px;
            background-color: #6c63ff;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .boton-monitors:hover {
            background-color: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(108,99,255,0.45);
        }

        /* --- BOTÓN VOLVER ESTILO PORTÁTIL "ENCENDIDO" --- */
        .boton-volver {
            position: fixed;
            bottom: 25px;
            left: 25px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .boton-volver .pantalla {
            width: 90px;
            height: 55px;
            background-color: #0a0a0a; /* Apagado inicial */
            border: 3px solid #333;
            border-radius: 6px;
            color: rgba(76, 255, 216, 0.3); /* Texto tenue cuando está apagado */
            font-size: 11px;
            font-family: 'Segoe UI', sans-serif;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .boton-volver .teclado {
            width: 105px;
            height: 12px;
            background-color: #222;
            margin-top: 2px;
            border-radius: 2px 2px 8px 8px;
            transition: all 0.4s ease;
            border-bottom: 3px solid #111;
        }

        /* EFECTO AL PONER EL RATÓN ENCIMA (ENCENDIDO) */
        .boton-volver:hover .pantalla {
            background-color: #4cffd8; /* Color de fondo encendido (Cian) */
            color: #000; /* Texto negro para contraste */
            border-color: #fff;
            box-shadow: 0 0 20px rgba(76, 255, 216, 0.8); /* Resplandor LED */
        }

        .boton-volver:hover .teclado {
            background-color: #333;
            border-bottom-color: #6c63ff; /* El borde inferior se vuelve púrpura */
        }

        .boton-volver:hover {
            transform: scale(1.1) translateY(-5px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            body { padding: 20px; }
            h1 { font-size: 28px; }
            .imagen { height: 170px; }
        }
    </style>
</head>

<body>

<h1>PORTÁTILES</h1>

<div class="grid">

    <div class="monitor-card">
        <div class="imagen"><img src="imgp/acergaming.png" alt="Acer Nitro v15"></div>
        <a href="Nitro v15.php" class="boton-monitors">Acer Nitro v15</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="imgp/msikatana17.png" alt="MSI Katana 17"></div>
        <a href="Katana 17.php" class="boton-monitors">MSI Katana 17</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="imgp/hpvictus15.png" alt="HP Victus 15"></div>
        <a href="Victus 15.php" class="boton-monitors">HP Victus 15</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="imgp/gigabytea16.png" alt="Gigabyte Gaming a16"></div>
        <a href="Gigabyte a16.php" class="boton-monitors">Gigabyte Gaming a16</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="imgp/hpomen16.png" alt="HP Omen 16"></div>
        <a href="Omen 16.php" class="boton-monitors">HP Omen 16</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="imgp/lenovolegion5.png" alt="Lenovo Legion 5"></div>
        <a href="Legion 5.php" class="boton-monitors">Lenovo Legion 5</a>
    </div>

</div>

<a href="principal.php" class="boton-volver">
    <span class="pantalla">Volver</span>
    <span class="teclado"></span>
</a>

</body>
</html>