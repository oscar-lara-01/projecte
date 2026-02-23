<?php
session_start();

// Si ya existe una cookie de "usuario_recordado", iniciamos sesión automáticamente
if (isset($_COOKIE['usuario_recordado'])) {
    $_SESSION['usuario'] = $_COOKIE['usuario_recordado'];
    header("Location: principal.php"); // Cambia esto al nombre de tu página principal
    exit;
}

// Lógica de validación al enviar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // VALIDACIÓN SIMPLE (Aquí deberías conectar con tu base de datos)
    if ($user === "admin" && $pass === "1234") {
        $_SESSION['usuario'] = $user;

        // Si marcó "Recordarme", creamos una cookie por 30 días
        if (isset($_POST['remember'])) {
            setcookie('usuario_recordado', $user, time() + (86400 * 30), "/");
        }

        header("Location: principal.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Portátiles</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 35%, #3f3f3f 70%, #7a7a7a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .login-card {
            background: #1b1b1b;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.8);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 30px;
            color: #fff;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 12px;
            color: #aaa;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 12px;
            background: #2a2a2a;
            border: 1px solid #444;
            border-radius: 8px;
            color: #fff;
            outline: none;
            transition: border 0.3s;
        }

        input:focus {
            border-color: #6c63ff;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #ccc;
            margin-bottom: 25px;
            cursor: pointer;
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: #6c63ff;
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-login:hover {
            background: #5750d4;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108,99,255,0.4);
        }

        .error-msg {
            color: #ff4c4c;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h1>Acceso</h1>
        
        <?php if(isset($error)) echo "<p class='error-msg'>$error</p>"; ?>

        <form method="POST" action="">
            <div class="input-group">
                <label>Usuario</label>
                <input type="text" name="username" required>
            </div>
            
            <div class="input-group">
                <label>Contraseña</label>
                <input type="password" name="password" required>
            </div>

            <label class="remember-me">
                <input type="checkbox" name="remember"> Recordarme por 30 días
            </label>

            <button type="submit" class="btn-login">Entrar</button>
        </form>
    </div>

</body>
</html>