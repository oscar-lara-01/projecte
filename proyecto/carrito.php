<?php
session_start();

// 1. Verificamos si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// 2. Lógica para eliminar un producto específico
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cesta - Detalles de Compra</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 40px;
            min-height: 100vh;
            font-family: 'Segoe UI', Roboto, Arial, sans-serif;
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
            font-weight: 300;
        }

        /* NUEVO BOTÓN VOLVER / SEGUIR COMPRANDO */
        .boton-volver {
            position: fixed;
            top: 40px;
            left: 40px;
            text-decoration: none;
            color: #888;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .boton-volver .icon-arrow {
            width: 45px;
            height: 45px;
            border: 1px solid #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: rgba(255,255,255,0.03);
            color: #fff;
        }

        .boton-volver:hover {
            color: #4cffd8;
        }

        .boton-volver:hover .icon-arrow {
            border-color: #4cffd8;
            background: rgba(76, 255, 216, 0.1);
            box-shadow: 0 0 20px rgba(76, 255, 216, 0.3);
            transform: translateX(-8px);
        }

        /* CONTENEDOR DE LA CESTA */
        .cart-container {
            max-width: 800px;
            width: 100%;
            background: rgba(27, 27, 27, 0.9);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.7);
            border: 1px solid rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
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
            opacity: 0.7;
        }

        .remove-link:hover { 
            opacity: 1;
            text-decoration: underline; 
        }

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
            text-shadow: 0 0 10px rgba(76, 255, 216, 0.2);
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

        /* RESPONSIVE */
        @media (max-width: 850px) {
            .boton-volver {
                position: static;
                margin-bottom: 20px;
                align-self: flex-start;
            }
            body { padding: 20px; }
        }

        @media (max-width: 600px) {
            .cart-container { padding: 20px; }
            .total-amount { font-size: 22px; }
            .actions { flex-direction: column; }
        }
    </style>
</head>
<body>

    <a href="principal.php" class="boton-volver">
        <div class="icon-arrow">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
        </div>
        <span>Seguir comprando</span>
    </a>

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
                            <span><?php echo htmlspecialchars($item['nombre']); ?></span>
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
                <a href="carrito.php?vaciar=1" class="btn-clear">Vaciar Cesta</a>
                <a href="#" class="btn-pay">Finalizar Compra</a>
            </div>

        <?php else: ?>
            <div style="text-align: center; padding: 40px 0;">
                <p style="color: #666; font-size: 18px;">Tu cesta está vacía actualmente.</p>
                <a href="principal.php" style="color: #6c63ff; text-decoration: none; font-weight: bold;">Ir a la tienda</a>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>