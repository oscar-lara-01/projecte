<?php
session_start();

// 1. Verificamos si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// 2. Lógica para eliminar un producto específico si se desea
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    if (isset($_SESSION['carrito'][$id])) {
        unset($_SESSION['carrito'][$id]);
    }
    header("Location: carrito.php");
    exit;
}

// 3. Lógica para vaciar todo el carrito
if (isset($_GET['vaciar'])) {
    unset($_SESSION['carrito']);
    header("Location: carrito.php");
    exit;
}

// 4. Calcular el total
$total = 0;
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $producto) {
        $total += $producto['precio'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Cesta - Detalles de Compra</title>
    <style>
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
            margin-bottom: 40px;
            font-size: 32px;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        /* CONTENEDOR DE LA CESTA */
        .cart-container {
            max-width: 800px;
            width: 100%;
            background: #1b1b1b;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.7);
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .cart-table th {
            text-align: left;
            color: #6c63ff;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
            padding-bottom: 15px;
            border-bottom: 1px solid #333;
        }

        .cart-table td {
            padding: 20px 0;
            border-bottom: 1px solid #222;
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-img {
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 8px;
            padding: 5px;
            object-fit: contain;
        }

        .price-text {
            color: #4cffd8;
            font-weight: bold;
        }

        .remove-link {
            color: #ff4c4c;
            text-decoration: none;
            font-size: 12px;
            transition: 0.3s;
        }

        .remove-link:hover { text-decoration: underline; }

        /* RESUMEN TOTAL */
        .total-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #333;
        }

        .total-amount {
            font-size: 28px;
            color: #4cffd8;
            font-weight: bold;
        }

        /* BOTONES */
        .actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-pay {
            flex: 2;
            background: #6c63ff;
            color: #fff;
            text-decoration: none;
            text-align: center;
            padding: 18px;
            border-radius: 12px;
            font-weight: bold;
            text-transform: uppercase;
            transition: 0.3s;
        }

        .btn-pay:hover {
            background: #5750d4;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(108,99,255,0.3);
        }

        .btn-clear {
            flex: 1;
            background: transparent;
            color: #888;
            border: 1px solid #444;
            text-decoration: none;
            text-align: center;
            padding: 18px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .btn-clear:hover {
            border-color: #ff4c4c;
            color: #ff4c4c;
        }

        /* BOTÓN VOLVER */
        .boton-volver {
            position: fixed; bottom: 25px; left: 25px;
            text-decoration: none; display: flex; flex-direction: column;
            align-items: center; z-index: 1000;
        }
        .boton-volver .pantalla {
            width: 90px; height: 50px; background-color: #1b1b1b;
            border: 3px solid #444; border-radius: 6px; color: #4cffd8;
            font-family: monospace; display: flex; align-items: center; justify-content: center;
        }
        .boton-volver .teclado { width: 100px; height: 10px; background-color: #555; margin-top: 3px; border-radius: 0 0 6px 6px; }

        @media (max-width: 600px) {
            .cart-container { padding: 20px; }
            .total-amount { font-size: 22px; }
        }
    </style>
</head>
<body>

    <h1>Tu Cesta</h1>

    <div class="cart-container">
        <?php if (!empty($_SESSION['carrito'])): ?>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['carrito'] as $id => $item): ?>
                    <tr>
                        <td class="product-info">
                            <img src="<?php echo $item['imagen']; ?>" class="product-img" alt="item">
                            <span><?php echo $item['nombre']; ?></span>
                        </td>
                        <td class="price-text"><?php echo number_format($item['precio'], 2); ?>€</td>
                        <td>
                            <a href="carrito.php?eliminar=<?php echo $id; ?>" class="remove-link">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="total-section">
                <span>TOTAL A PAGAR:</span>
                <span class="total-amount"><?php echo number_format($total, 2); ?>€</span>
            </div>

            <div class="actions">
                <a href="carrito.php?vaciar=1" class="btn-clear">Vaciar</a>
                <a href="#" class="btn-pay">Finalizar Compra</a>
            </div>

        <?php else: ?>
            <div style="text-align: center; padding: 40px 0;">
                <p style="color: #666; font-size: 18px;">Tu cesta está vacía actualmente.</p>
                <a href="principal.php" style="color: #6c63ff; text-decoration: none;">Ir a ver portátiles</a>
            </div>
        <?php endif; ?>
    </div>

    <a href="principal.php" class="boton-volver">
        <span class="pantalla">Tienda</span>
        <span class="teclado"></span>
    </a>

</body>
</html>