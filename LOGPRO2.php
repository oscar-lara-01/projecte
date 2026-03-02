<?php
session_start();

// 1. Verificamos si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// 2. Lógica para añadir al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $producto = [
        'nombre' => 'HP Victus 15',
        'precio' => 849.00,
        'imagen' => 'imgp/hpvictus15.png'
    ];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $_SESSION['carrito'][] = $producto;

    // Redirigimos al carrito para ver la compra
    header("Location: carrito.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HP Victus 15 - Detalles</title>

<style>
/* BASE */
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
    align-items: center;
    min-height: 550px;
}

/* IMAGEN PRODUCTO */
.producto-imagen {
    flex: 1.2;
    background: #ffffff;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 400px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    overflow: hidden;
}

.producto-imagen img {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
}

/* INFO PRODUCTO */
.info-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.info-container h2 {
    color: #6c63ff;
    font-size: 28px;
    margin-bottom: 20px;
}

.especificaciones {
    list-style: none;
    padding: 0;
    margin-bottom: 25px;
}

.especificaciones li {
    margin-bottom: 15px;
    padding-bottom: 8px;
    border-bottom: 1px solid #333;
    display: flex;
    justify-content: space-between;
}

.especificaciones li span {
    color: #aaa;
    font-weight: bold;
}

/* PRECIO */
.precio-tag .monto {
    font-size: 34px;
    font-weight: bold;
    color: #4cffd8;
}

.precio-tag .iva {
    font-size: 12px;
    color: #888;
    text-transform: uppercase;
}

/* BOTÓN ACCIÓN */
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
    transition: 0.3s ease;
    font-size: 16px;
}

.boton-accion:hover {
    background-color: #5750d4;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(108,99,255,0.4);
}

/* ========================= */
/* BOTÓN VOLVER RATÓN RGB */
/* ========================= */

.boton-volver-raton {
    position: fixed;
    bottom: 25px;
    left: 30px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 9999;
    transition: transform 0.3s ease;
}

/* Cable */
.raton-cable {
    width: 2px;
    height: 20px;
    background: #444;
    margin-bottom: -2px;
    transition: all 0.4s ease;
}

/* Cuerpo */
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

/* Rueda */
.raton-rueda {
    width: 6px;
    height: 12px;
    background: #444;
    border-radius: 3px;
    position: absolute;
    top: 15px;
    transition: all 0.4s ease;
}

/* Texto */
.raton-texto {
    font-size: 9px;
    color: #666;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 10px;
    transition: all 0.4s ease;
}

/* HOVER RGB */
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

/* RESPONSIVE */
@media (max-width: 900px) {
    .container {
        flex-direction: column;
        padding: 30px;
        gap: 30px;
    }

    .producto-imagen {
        width: 100%;
        height: 300px;
    }

    .info-container {
        align-items: center;
        text-align: center;
    }
}
</style>
</head>
<body>

    <h1>G PRO X SuperLight 2</h1>

    <div class="container">
        <div class="producto-imagen">
            <button class="flecha flecha-izq" onclick="moveSlide(-1)">&#10094;</button>
            <div class="slider-wrapper" id="slider">
                <img src="imgp/LOGPRO2.png" alt="Vista Principal">
                <img src="imgp/LOGPRO2-2.png.png" alt="Vista Lateral">
                <img src="imgp/LOGPRO2-3.png.png" alt="Detalle Teclado">
            </div>
            <button class="flecha flecha-der" onclick="moveSlide(1)">&#10095;</button>
        </div>

<div class="info-container">
<h2>Ficha Técnica</h2>
<ul class="especificaciones">
<li><span>Tipo:</span> Ratón Gaming inalámbrico</li>
<li><span>Sensor:</span> HERO 2</li>
<li><span>DPI:</span> Hasta 32.000</li>
<li><span>Peso:</span> 60g</li>
<li><span>Tasa sondeo:</span> 2000Hz</li>
<li><span>Batería:</span> Hasta 95h</li>
</ul>

<div class="precio-tag">
<span class="monto">169,00€</span>
<span class="iva">IVA incluido</span>
</div>
</div>
            <form method="POST">
                <button type="submit" name="add_to_cart" class="boton-accion">
                    AÑADIR AL CARRITO
                </button>
            </form>
        </div>
    </div>

    <a href="portatils.php" class="boton-volver">
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
            slider.style.transform = `translateX(${currentIndex * -100}%)`;
        }
    </script>

<a href="periferics.php" class="boton-volver-raton">
    <span class="raton-cable"></span>
    <div class="raton-cuerpo">
        <span class="raton-rueda"></span>
        <span class="raton-texto">Volver</span>
    </div>
</a>

</body>
</html>