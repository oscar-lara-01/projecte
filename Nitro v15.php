<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acer Nitro v15 - Detalles</title>

    <style>
        /* RESET Y BASE */
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

        /* CONTENEDOR PRINCIPAL */
        .container {
            max-width: 1000px;
            width: 100%;
            background: #1b1b1b;
            border-radius: 25px;
            padding: 50px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.7);
            display: flex;
            gap: 50px;
            align-items: center; /* Centra verticalmente los dos bloques principales */
            min-height: 500px;
        }

        /* VITRINA CON SLIDER */
        .producto-imagen {
            flex: 1.2;
            background: #ffffff;
            border-radius: 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 400px; /* Altura fija para la vitrina */
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

        /* FLECHAS SLIDER */
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

        .flecha:hover {
            background: #6c63ff;
            color: white;
        }

        .flecha-izq { left: 15px; }
        .flecha-der { right: 15px; }

        /* FICHA TÉCNICA (CENTRADA) */
        .info-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centra el contenido internamente de arriba a abajo */
            height: 100%;
        }

        .info-container h2 {
            color: #6c63ff;
            font-size: 30px;
            margin: 0 0 25px 0;
            letter-spacing: 1px;
        }

        .especificaciones {
            list-style: none;
            padding: 0;
            margin: 0 0 35px 0;
        }

        .especificaciones li {
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 1px solid #333;
            font-size: 17px;
            display: flex;
            justify-content: space-between;
        }

        .especificaciones li span {
            color: #aaa;
            font-weight: bold;
        }

        /* BOTÓN DE ACCIÓN */
        .boton-accion {
            display: inline-block;
            padding: 18px 25px;
            background-color: #6c63ff;
            color: #fff;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
            text-align: center;
            transition: all 0.3s ease;
        }

        .boton-accion:hover {
            background-color: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(108,99,255,0.4);
        }

        /* BOTÓN VOLVER (ESTILO LAPTOP) */
        .boton-volver {
            position: fixed;
            bottom: 25px;
            left: 25px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1000;
        }

        .boton-volver .pantalla {
            width: 90px;
            height: 50px;
            background-color: #1b1b1b;
            border: 3px solid #444;
            border-radius: 6px;
            color: #4cffd8;
            font-size: 12px;
            font-family: monospace;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .boton-volver .teclado {
            width: 100px;
            height: 10px;
            background-color: #555;
            margin-top: 3px;
            border-radius: 0 0 6px 6px;
        }

        .boton-volver:hover .pantalla {
            background-color: #000;
            border-color: #6c63ff;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .container { flex-direction: column; padding: 30px; gap: 30px; }
            .producto-imagen { width: 100%; height: 300px; }
            .info-container { text-align: center; }
            .especificaciones li { font-size: 15px; }
        }
    </style>
</head>
<body>

    <h1>ACER NITRO V15</h1>

    <div class="container">
        <div class="producto-imagen">
            <button class="flecha flecha-izq" onclick="moveSlide(-1)">&#10094;</button>
            
            <div class="slider-wrapper" id="slider">
                <img src="imgp/acergaming.png" alt="Acer Nitro Vista 1">
                <img src="imgp/acergaming2.png" alt="Acer Nitro Vista 2">
                <img src="imgp/acergaming3.png" alt="Acer Nitro Vista 3">
            </div>

            <button class="flecha flecha-der" onclick="moveSlide(1)">&#10095;</button>
        </div>

        <div class="info-container">
            <h2>Ficha Técnica</h2>
            <ul class="especificaciones">
                <li><span>Procesador:</span> Intel Core i5-13420H</li>
                <li><span>Memoria RAM:</span> 16GB DDR5</li>
                <li><span>Gráficos:</span> NVIDIA RTX 4050</li>
                <li><span>SSD:</span> 512GB NVMe</li>
                <li><span>Pantalla:</span> 15.6" 144Hz</li>
            </ul>
            <a href="#" class="boton-accion">AÑADIR AL CARRITO</a>
        </div>
    </div>

    <a href="index.php" class="boton-volver">
        <span class="pantalla">Volver</span>
        <span class="teclado"></span>
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
            const offset = currentIndex * -100;
            slider.style.transform = `translateX(${offset}%)`;
        }
    </script>

</body>
</html>