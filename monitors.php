<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Monitores</title>

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

        /* Vitrina clara para imágenes con fondo blanco */
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

        /* Botón volver (monitor) */
        .boton-volver {
            position: fixed;
            bottom: 20px;
            left: 20px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            z-index: 1000;
        }

        .boton-volver .pantalla {
            width: 85px;
            height: 50px;
            background-color: #1b1b1b;
            border: 3px solid #444;
            border-radius: 6px 6px 2px 2px;
            color: #4cffd8;
            font-size: 12px;
            font-family: monospace;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .boton-volver .soporte {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -2px;
        }

        .boton-volver .brazo {
            width: 6px;
            height: 26px;
            background-color: #555;
            border-radius: 2px;
        }

        .boton-volver .base {
            width: 40px;
            height: 6px;
            background-color: #555;
            border-radius: 2px;
        }

        .boton-volver:hover .pantalla {
            background-color: #000;
            border-color: #6c63ff;
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

<h1>MONITORES</h1>

<div class="grid">

    <div class="monitor-card">
        <div class="imagen"><img src="/imgp/Ultragear.svg" alt="LG UltraGear"></div>
        <a href="Ultragear27p.php" class="boton-monitors">LG UltraGear 27G610A-B 27"</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="/imgp/MSImag.svg" alt="MSI MAG"></div>
        <a href="MSImag27p.php" class="boton-monitors">MSI MAG 276CXF 27"</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="/imgp/Acer23.8.svg" alt="Acer Nitro"></div>
        <a href="Acer23.8p.php" class="boton-monitors">Acer Nitro KG241YX3BIP 23.8"</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="/imgp/Samsung27.svg" alt="Samsung 27"></div>
        <a href="Samsung27p.php" class="boton-monitors">Samsung S27D302GAU 27"</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="/imgp/MSImpg.svg" alt="MSI MPG OLED"></div>
        <a href="MSImpg31.5p.php" class="boton-monitors">MSI MPG 321URX QD-OLED 31.5"</a>
    </div>

    <div class="monitor-card">
        <div class="imagen"><img src="/imgp/Asrock27.svg" alt="Asrock Phantom"></div>
        <a href="Asrock27p.php" class="boton-monitors">Asrock Phantom Gaming 27"</a>
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
