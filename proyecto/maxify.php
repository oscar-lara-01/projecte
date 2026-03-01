<?php
session_start();

// 1. Verificamos si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// 2. Lógica para añadir al carrito (Adaptado a Canon MAXIFY GX7050)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $producto = [
        'nombre' => 'Canon MAXIFY GX7050',
        'precio' => 599.00,
        'imagen' => 'imgp/canon_gx7050.png'
    ];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $_SESSION['carrito'][] = $producto;

    header("Location: carrito.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canon MAXIFY GX7050 - Detalles</title>

    <style>
        /* MANTENEMOS TU ESTILO ORIGINAL */
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 40px;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 35%, #3f3f3f 70%, #7a7a7a 100%);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 36px;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            background: #1b1b1b;
            border-radius: 25px;
            padding: 50px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.7);
            display: flex;
            gap: 50px;
            align-items: center;
            min-height: 550px;
        }

        .producto-imagen {
            flex: 1.2;
            background: #ffffff;
            border-radius: 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 400px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            overflow: hidden;
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
            height: 100%;
        }

        .slider-wrapper img {
            min-width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 30px;
        }

        .flecha {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.1);
            color: #333;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .flecha:hover { background: #6c63ff; color: white; }
        .flecha-izq { left: 15px; }
        .flecha-der { right: 15px; }

        .info-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-container h2 {
            color: #6c63ff;
            font-size: 28px;
            margin: 0 0 20px 0;
            letter-spacing: 1px;
        }

        .especificaciones {
            list-style: none;
            padding: 0;
            margin: 0 0 25px 0;
        }

        .especificaciones li {
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #333;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
        }

        .especificaciones li span { color: #aaa; font-weight: bold; }

        .precio-tag {
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
        }

        .precio-tag .monto {
            font-size: 34px;
            font-weight: bold;
            color: #4cffd8;
            letter-spacing: 1px;
        }

        .precio-tag .iva {
            font-size: 12px;
            color: #888;
            text-transform: uppercase;
        }

        .boton-accion {
            display: inline-block;
            padding: 18px 25px;
            background-color: #6c63ff;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-weight: bold;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
            text-transform: uppercase;
        }

        .boton-accion:hover {
            background-color: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(108,99,255,0.4);
        }

        /* BOTÓN VOLVER (ESTILO IMPRESORA) */
        .boton-volver {
            position: fixed; bottom: 25px; left: 25px;
            text-decoration: none; display: flex; flex-direction: column;
            align-items: center; z-index: 1000;
        }

        .boton-volver .cuerpo-impresora {
            width: 70px; height: 35px; background-color: #1b1b1b;
            border: 3px solid #444; border-radius: 6px; position: relative;
        }

        .boton-volver .papel {
            width: 40px; height: 20px; background-color: #fff;
            position: absolute; top: -10px; left: 12px; border-radius: 2px 2px 0 0;
            color: #000; font-size: 9px; font-weight: bold; 
            text-align: center; line-height: 20px; transition: 0.3s;
        }

        .boton-volver:hover .cuerpo-impresora { border-color: #6c63ff; }
        .boton-volver:hover .papel { top: -15px; background-color: #4cffd8; }

        @media (max-width: 900px) {
            .container { flex-direction: column; padding: 30px; gap: 30px; }
            .producto-imagen { width: 100%; height: 300px; }
            .info-container { align-items: center; text-align: center; }
        }
    </style>
</head>
<body>

    <h1>Canon MAXIFY GX7050</h1>

    <div class="container">
        <div class="producto-imagen">
            <button class="flecha flecha-izq" onclick="moveSlide(-1)">&#10094;</button>
            <div class="slider-wrapper" id="slider">
                <img src="imgp/canongx7050f.png" alt="Canon MAXIFY GX7050 Frontal">
                <img src="imgp/canongx7050p.png" alt="Canon MAXIFY GX7050 Panel">
                <img src="imgp/canongx7050t.png" alt="Canon MAXIFY GX7050 Tinta">
            </div>
            <button class="flecha flecha-der" onclick="moveSlide(1)">&#10095;</button>
        </div>

        <div class="info-container">
            <h2>Ficha Técnica</h2>
            <ul class="especificaciones">
                <li><span>Funciones:</span> Impresión, copia, escaneo y fax</li>
                <li><span>Velocidad:</span> 24 ipm (B/N) / 15.5 ipm (Color)</li>
                <li><span>Resolucion:</span> 600 x 1.200 ppp</li>
                <li><span>Pantalla:</span> táctil LCD a color de 6,9 cm</li>
                <li><span>Tinta:</span> Botellas de tinta GI-56 pigmentadas</li>
                <li><span>Conexion:</span> USB 2.0, Wi-Fi, Ethernet</li>
            </ul>

            <div class="precio-tag">
                <span class="monto">599,00€</span>
                <span class="iva">IVA incluido</span>
            </div>

            <form method="POST">
                <button type="submit" name="add_to_cart" class="boton-accion">
                    AÑADIR AL CARRITO
                </button>
            </form>
        </div>
    </div>

    <a href="impresores.php" class="boton-volver">
        <span class="papel">Volver</span>
        <span class="cuerpo-impresora"></span>
    </a>

    <script>
        let currentIndex = 0;
        const slider = document.getElementById('slider');
        const images = slider.getElementsByTagName('img');

        function moveSlide(direction) {
            currentIndex += direction;
            if (currentIndex >= images.length) currentIndex = 0;
            if (currentIndex < 0) currentIndex = images.length - 1;
            updateSlider();
        }

        function updateSlider() {
            slider.style.transform = `translateX(${currentIndex * -100}%)`;
        }
    </script>

</body>
</html>