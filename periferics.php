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
            margin-bottom: 100px;
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

        /* --- NUEVO BOTÓN VOLVER ESTILO RATÓN GAMING RGB --- */
        .boton-volver-raton {
            position: fixed;
            bottom: 25px;
            left: 30px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        /* El cuerpo del ratón */
        .raton-cuerpo {
            width: 50px;
            height: 80px;
            background: #222;
            border: 2px solid #444;
            border-radius: 25px 25px 30px 30px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }

        /* Rueda del ratón */
        .raton-rueda {
            width: 6px;
            height: 12px;
            background: #444;
            border-radius: 3px;
            position: absolute;
            top: 15px;
            transition: all 0.4s ease;
        }

        /* Texto volver oculto o tenue */
        .raton-texto {
            font-size: 9px;
            color: #666;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
            transition: all 0.4s ease;
        }

        /* El cable del ratón */
        .raton-cable {
            width: 2px;
            height: 20px;
            background: #444;
            margin-bottom: -2px;
            transition: all 0.4s ease;
        }

        /* EFECTO HOVER: SE ENCIENDE EL RGB */
        .boton-volver-raton:hover .raton-cuerpo {
            background: #111;
            border-color: #6c63ff;
            box-shadow: 0 0 20px rgba(108, 99, 255, 0.6), 
                        inset 0 0 10px rgba(76, 255, 216, 0.4);
            transform: translateY(-5px);
        }

        .boton-volver-raton:hover .raton-rueda {
            background: #4cffd8;
            box-shadow: 0 0 8px #4cffd8;
        }

        .boton-volver-raton:hover .raton-texto {
            color: #fff;
            text-shadow: 0 0 5px #6c63ff;
        }

        .boton-volver-raton:hover .raton-cable {
            background: #6c63ff;
        }

        .boton-volver-raton:active {
            transform: scale(0.9);
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

<a href="principal.php" class="boton-volver-raton">
    <span class="raton-cable"></span>
    <div class="raton-cuerpo">
        <span class="raton-rueda"></span>
        <span class="raton-texto">Volver</span>
    </div>
</a>

</body>
</html>