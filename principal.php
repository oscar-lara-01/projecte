<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>02C4R & M0R4D</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            background: white;
            display: flex;
            justify-content: center;
            /*align-items: center;*/
            font-family: Arial, sans-serif;
        }

        .contenedor {
            text-align: center;
        }

        h1 {
            letter-spacing: 3px;
            margin-bottom: 30px;
        }

        .botones {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        button {
            background: white;
            border: 2px solid black;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
        }

        button:hover {
            background: #f0f0f0;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>O2C4R & M0R4D</h1>

    <div class="botones">
    <form action="portatils.php" method="get">
            <button name="portatils" value="portatils">portatils</button>
    </form>
    <form action="monitors.php" method="get">
            <button name="monitors" value="monitors">monitors</button>
    </form>
        <form action="impresores.php" method="get">
            <button name="imoresores" value="impresores">impresores</button>
    </form>
        <form action="periferics.php" method="get">
            <button name="periferics" value="periferics">periferics</button>
    </form>


    </php> 
</div>

</body>
</html>
