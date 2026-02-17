<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periféricos - Gaming Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px;
            font-family: 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 35%, #4a4a4a 70%, #8a8a8a 100%);
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 36px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #fff;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .periferico-card {
            background: #1b1b1b;
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .periferico-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.8);
        }

        .imagen-container {
            width: 100%;
            height: 220px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 12px;
            background: #111;
            transition: transform 0.5s ease;
        }

        .imagen-container img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }

        .periferico-card:hover .imagen-container img {
            transform: scale(1.1);
        }

        .boton-periferics {
            display: inline-block;
            padding: 16px 28px;
            background-color: #6c63ff;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .boton-periferics:hover {
            background-color: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108,99,255,0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            body { padding: 20px; }
            h1 { font-size: 28px; }
            .grid { gap: 20px; }
            .imagen-container { height: 180px; }
            .boton-periferics { padding: 14px 24px; font-size: 15px; }
        }
    </style>
</head>
<body>

<h1>PERIFÉRICOS</h1>

<div class="grid">
    <div class="periferico-card">
        <div class="imagen-container"><img src="/imgp/LOGG502.svg" alt="Logitech G502"></div>
        <a href="LOGG502.php" class="boton-periferics">Logitech G502</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="/imgp/Razerv3.svg" alt="Razer Viper V3 Pro"></div>
        <a href="Razerv3.php" class="boton-periferics">Razer Viper V3 Pro</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="/imgp/LOGPRO2.svg" alt="Logitech G PRO X SuperLight 2"></div>
        <a href="LOGPRO2.php" class="boton-periferics">G PRO X SuperLight 2</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="/imgp/Corsairk70.svg" alt="Corsair Core K70"></div>
        <a href="Corsairk70.php" class="boton-periferics">Corsair Core K70</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="/imgp/RazerBWV3mini.svg" alt="Razer BlackWidow V3 Mini"></div>
        <a href="RazerBWVmini.php" class="boton-periferics">Razer BlackWidow V3 Mini</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="/imgp/LOGG522.svg" alt="Logitech G522 LightSpeed"></div>
        <a href="LOGG522.php" class="boton-periferics">Logitech G522 LightSpeed</a>
    </div>
</div>

<a href="principal.php" class="boton-volver">
    <span class="pantalla">Volver</span>
    <span class="teclado"></span>
</a>

</body>
</html>
