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
            background: linear-gradient(
                135deg,
                #000000 0%,
                #1a1a1a 30%,
                #4a4a4a 70%,
                #8a8a8a 100%
            );
            font-family: Arial, sans-serif;
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 36px;
            letter-spacing: 4px;
            color: #fff;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .portatil {
            background: #1b1b1b;
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .portatil:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.7);
        }

        .imagen {
            width: 100%;
            height: 200px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 12px;
            background: #111;
        }

        .imagen img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .boton-portatil {
            display: inline-block;
            padding: 14px 25px;
            background-color: #6c63ff;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .boton-portatil:hover {
            background-color: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108,99,255,0.4);
        }

        .boton-volver {
            position: fixed;
            bottom: 20px;
            left: 20px;
            text-decoration: none;
            width: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
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
            transition: background-color 0.3s;
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
        }

        /* Responsive */
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 20px;
            }

            h1 {
                font-size: 28px;
            }

            .boton-portatil {
                padding: 12px 20px;
                font-size: 14px;
            }

            .imagen {
                height: 160px;
            }
        }
    </style>
</head>

<body>

<h1>PORTÁTILES</h1>

<div class="grid">

    <div class="portatil">
        <div class="imagen"><img src="/imgp/acergaming.svg" alt="Acer Nitro v15"></div>
        <p><a href="Nitro v15.php" class="boton-portatil">Acer Nitro v15</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src="/imgp/msikatana17.svg" alt="MSI Katana 17"></div>
        <p><a href="Katana 17.php" class="boton-portatil">MSI Katana 17</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src="/imgp/hpvictus6.svg" alt="HP Victus 6"></div>
        <p><a href="Victus 6.php" class="boton-portatil">HP Victus 6</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src="/imgp/gigabytea16.svg" alt="Gigabyte Gaming a16"></div>
        <p><a href="Gigabyte a16.php" class="boton-portatil">Gigabyte Gaming a16</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src="/imgp/hpomen16.svg" alt="HP Omen 16"></div>
        <p><a href="Omen 16.php" class="boton-portatil">HP Omen 16</a></p>
    </div>

    <div class="portatil">
        <div class="imagen"><img src="/imgp/lenovolegion5.svg" alt="Lenovo Legion 5"></div>
        <p><a href="Legion 5.php" class="boton-portatil">Lenovo Legion 5</a></p>
    </div>

</div>

<a href="principal.php" class="boton-volver">
    <span class="pantalla">Volver</span>
    <span class="teclado"></span>
</a>

</body>
</html>

