<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>02C4R & M0R4D</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(
        135deg,
        #000000 0%,
        #1a1a1a 35%,
        #4a4a4a 70%,
        #7a7a7a 100%
    );
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

        .contenedor {
            background: #ffffff;
            padding: 60px 70px;
            border-radius: 16px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.35);
            text-align: center;
            width: 500px;
        }

        h1 {
            margin-bottom: 45px;
            letter-spacing: 6px;
            font-size: 32px;
            color: #111;
        }

        .botones {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
        }

        button {
            padding: 22px;
            border-radius: 12px;
            border: none;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            background: #111;
            color: white;
            transition: all 0.3s ease;
        }

        button:hover {
            background: #6c63ff;
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(108,99,255,0.45);
        }

        form {
            margin: 0;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>O2C4R & M0R4D</h1>

    <div class="botones">
        <form action="portatils.php" method="get">
            <button>Portátiles</button>
        </form>

        <form action="monitors.php" method="get">
            <button>Monitores</button>
        </form>

        <form action="impresores.php" method="get">
            <button>Impresoras</button>
        </form>

        <form action="periferics.php" method="get">
            <button>Periféricos</button>
        </form>
    </div>
</div>

</body>
</html>