<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <div class="logo-container">
    <a href="index.php">
        <img src="logo.png" alt="Logo TransformFit" class="logo">
    </a>
    </div>
    </header>

    <main>
        <section class="form-container">
            <h1>Registrarse</h1>
            <form action="procesar_registro.php" method="POST">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Registrarse</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2025 All Rights Reserved by David Alejandro Sánchez Prieto</p>
    </footer>
</body>
</html>
