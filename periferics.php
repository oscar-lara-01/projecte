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

        /* Tarjeta estilo Referencia */
        .periferico-card {
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

        .periferico-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 50px rgba(0,0,0,0.8);
        }

        /* Vitrina blanca para imágenes */
        .imagen-container {
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

        .imagen-container img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            transition: transform 0.4s ease;
        }

        .periferico-card:hover .imagen-container img {
            transform: scale(1.05);
        }

        .boton-periferics {
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

        .boton-periferics:hover {
            background-color: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(108,99,255,0.45);
        }

        /* Enlace de volver simple (sin dibujo) */
        .boton-volver-simple {
            position: fixed;
            bottom: 20px;
            left: 20px;
            text-decoration: none;
            z-index: 1000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body { padding: 20px; }
            h1 { font-size: 28px; }
            .imagen-container { height: 170px; }
        }
    </style>
</head>
<body>

<h1>PERIFÉRICOS</h1>

<div class="grid">
    <div class="periferico-card">
        <div class="imagen-container"><img src="imgp/LOGG502.png" alt="Logitech G502"></div>
        <a href="LOGG502.php" class="boton-periferics">Logitech G502</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="imgp/Razerv3.png" alt="Razer Viper V3 Pro"></div>
        <a href="Razerv3.php" class="boton-periferics">Razer Viper V3 Pro</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="imgp/LOGPRO2.png" alt="Logitech G PRO X SuperLight 2"></div>
        <a href="LOGPRO2.php" class="boton-periferics">G PRO X SuperLight 2</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="imgp/Corsairk70.png" alt="Corsair Core K70"></div>
        <a href="Corsairk70.php" class="boton-periferics">Corsair Core K70</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="imgp/RazerBWV3mini.png" alt="Razer BlackWidow V3 Mini"></div>
        <a href="RazerBWVmini.php" class="boton-periferics">Razer BlackWidow V3 Mini</a>
    </div>

    <div class="periferico-card">
        <div class="imagen-container"><img src="imgp/LOGG522.png" alt="Logitech G522 LightSpeed"></div>
        <a href="LOGG522.php" class="boton-periferics">Logitech G522 LightSpeed</a>
    </div>
</div>

<a href="principal.php" class="boton-volver-simple"></a>

</body>
</html>