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
    <title>Impresores</title>

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
            margin-bottom: 80px; /* Espacio para no tapar el botón volver */
        }

        /* Tarjeta estilo Referencia */
        .impresora-card {
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

        .impresora-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 50px rgba(0,0,0,0.8);
        }

        /* Vitrina blanca para las impresoras */
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

        .impresora-card:hover .imagen img {
            transform: scale(1.05);
        }

        /* Botón morado de la referencia */
        .boton-impresora {
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

        .boton-impresora:hover {
            background-color: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(108,99,255,0.45);
        }

        /* --- NUEVO BOTÓN VOLVER ESTILO IMPRESORA --- */
        .boton-volver {
            position: fixed;
            bottom: 25px;
            left: 25px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .boton-volver:hover {
            transform: scale(1.1);
        }

        .boton-volver .cuerpo-impresora {
            width: 70px;
            height: 35px;
            background-color: #1b1b1b;
            border: 3px solid #444;
            border-radius: 6px;
            position: relative;
        }

        .boton-volver .papel {
            width: 40px;
            height: 20px;
            background-color: #fff;
            position: absolute;
            top: -10px;
            left: 12px;
            border-radius: 2px 2px 0 0;
            color: #000;
            font-size: 9px;
            font-weight: bold; 
            text-align: center;
            line-height: 20px;
            transition: 0.3s;
        }

        .boton-volver:hover .cuerpo-impresora {
            border-color: #6c63ff; /* Púrpura al hacer hover */
        }

        .boton-volver:hover .papel {
            top: -15px;
            background-color: #4cffd8; /* Cian al hacer hover */
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

<h1>IMPRESORES</h1>

<div class="grid">

    <div class="impresora-card">
        <div class="imagen"><img src="imgp/PIXMA.png" alt="Canon PIXMA"></div>
        <a href="PIXMA.php" class="boton-impresora">Canon PIXMA ts3750i</a>
    </div>

    <div class="impresora-card">
        <div class="imagen"><img src="imgp/brother.png" alt="Brother MFC"></div>
        <a href="mfc.php" class="boton-impresora">Brother mfc-l3760cdw</a>
    </div>

    <div class="impresora-card">
        <div class="imagen"><img src="imgp/hp.png" alt="HP Deskjet"></div>
        <a href="deskjet.php" class="boton-impresora">HP deskjet 2630</a>
    </div>

    <div class="impresora-card">
        <div class="imagen"><img src="imgp/epson.png" alt="Epson L8100"></div>
        <a href="EPSON.php" class="boton-impresora">EPSON l8100</a>
    </div>

    <div class="impresora-card">
        <div class="imagen"><img src="imgp/hp2.png" alt="HP Laserjet"></div>
        <a href="laserjet.php" class="boton-impresora">HP Laserjet m209d</a>
    </div>

    <div class="impresora-card">
        <div class="imagen"><img src="imgp/canon2.png" alt="Canon Maxify"></div>
        <a href="maxify.php" class="boton-impresora">Canon maxify gx 7050</a>
    </div>

</div>

<a href="principal.php" class="boton-volver">
    <span class="papel">Volver</span>
    <span class="cuerpo-impresora"></span>
</a>

</body>
</html>