<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Codificación -->
    <meta charset="UTF-8">
    
    <!-- Configuración de la ventana de visualización -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Información de la página -->
    <meta name="description" content="Descubre entrenamientos personalizados de calistenia, ejercicios en casa y rutinas de gimnasio. Únete ahora para alcanzar tus objetivos físicos desde cualquier lugar.">
    <meta name="author" content="David Alejandro Sánchez Prieto">
    <meta name="copyright" content="© 2025 David Alejandro Sánchez Prieto">
    
    <!-- Control de caché -->
    <meta http-equiv="cache-control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    
    <!-- Título -->
    <title>TransformFit</title>
    
    <!-- Enlace a CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<script src="script.js"></script>

<!-- ----------------------WhatsApp---------------------- -->
<a href="https://wa.me/+34620249882" class="whatsapp-btn" target="_blank">
    <img src="whatsapp-icon.png" alt="WhatsApp">
</a>

<!-- ----------------------MENU SUPERIOR---------------------- -->
<header>
    <div class="nav-left">
        <nav>
            <ul>
                <li><a href="#calistenia">Calistenia</a></li>
                <li><a href="#en-casa">En Casa</a></li>
                <li><a href="#gimnasio">Gimnasio</a></li>
            </ul>
        </nav>
    </div>
    <div class="logo-container">
    <a href="index.php">
        <img src="logo.png" alt="Logo TransformFit" class="logo">
    </a>
    </div>
    <div class="nav-right">
        <nav>
        <ul>
    <li><a href="login.php" class="boton">Iniciar Sesión</a></li>
    <li><a href="registro.php" class="boton">Registrarse</a></li>
        </ul>
        <nav>
    </div>
    
</header>




<main>
    <section class="bienvenida">
        <h1>¡Únete a EntrenamientoPersonal y mejora tu vida!</h1>
        <p>Ofrecemos planes de entrenamiento personalizados para calistenia, ejercicios en casa y rutinas de gimnasio.</p>
    </section>
</main>

<!-- ----------------------CATEGORIAS---------------------- -->
<section class="categorias">
    <?php
    $categorias = [
        ["id" => "calistenia", "img" => "calistenia.jpg", "titulo" => "Calistenia", "descripcion" => "Descubre nuestros planes de entrenamiento de calistenia.", "ancla" => "calistenia-info"],
        ["id" => "en-casa", "img" => "en-casa.jpg", "titulo" => "En Casa", "descripcion" => "Descubre nuestros planes de entrenamiento de en casa.", "ancla" => "EnCasa-info"],
        ["id" => "gimnasio", "img" => "gimnasio.jpg", "titulo" => "Gimnasio", "descripcion" => "Descubre nuestros planes de entrenamiento de gimnasio.", "ancla" => "Gimnasio-info"]
    ];

    foreach ($categorias as $categoria) {
        echo "<div class='categoria' id='{$categoria['id']}'>";
        echo "<img src='{$categoria['img']}' alt='{$categoria['titulo']}'>";
        echo "<h2>{$categoria['titulo']}</h2>";
        echo "<p>{$categoria['descripcion']}</p>";
        echo "<a href='#{$categoria['ancla']}'>Más información →</a>";
        echo "</div>";
    }
    ?>
</section>


     <!-- ----------------------Pregunta  desplegable---------------------- -->
    <section class="pregunta">
        <button class="desplegable">¿Por qué entrenar con nosotros?</button>
        <div class="contenido-desplegable">
            <div class='contenido'>
                <img src='tu-imagen.jpg' alt='Tu Imagen'>
                <h2>Entrenar con nosotros significa disfrutar de:</h2>
                <ul> 
                    <li>Planes personalizados según tus objetivos.</li><br>
                    <li>Asesoramiento continuo por profesionales.</li><br> 
                    <li>Acceso a rutinas tanto para casa como gimnasio.</li><br> 
                    <li>Un enfoque integral para mejorar tu salud y rendimiento.</li> 
            </ul>
            </div>
        </div>
    </section>

<!-- ----------------------Contenidos desplegables---------------------- -->
<section class="calistenia-info" id="calistenia-info">
    <button class="desplegable-calistenia">
        sobre la Calistenia
        <span class="icono-calistenia">+</span>
    </button>
    <div class="contenido-calistenia">
        <p>
        La calistenia es un método de entrenamiento basado en el uso del propio peso corporal para desarrollar
         fuerza, flexibilidad y resistencia. 
         Nuestros planes incluyen ejercicios progresivos y personalizables para todos los niveles.
        </p>
    </div>
</section>

<section class="EnCasa-info" id="EnCasa-info">
    <button class="desplegable-EnCasa">
        sobre los ejercicios en casa
        <span class="icono-EnCasa">+</span>
    </button>
    <div class="contenido-EnCasa">
        <p>
        Los ejercicios en casa son una forma práctica de mantenerte activo,
         aprovechando tu propio espacio para desarrollar fuerza, resistencia
          y bienestar. Nuestros planes están diseñados para adaptarse a cualquier nivel y objetivo.
        </p>
    </div>
</section>

<section class="Gimnasio-info" id="Gimnasio-info">
    <button class="desplegable-Gimnasio">
        sobre los ejercicios en el Gimnasio
        <span class="icono-Gimnasio">+</span>
    </button>
    <div class="contenido-Gimnasio">
        <p>
        Los ejercicios en el gimnasio te brindan acceso a equipos especializados para maximizar tu fuerza, 
        resistencia y rendimiento. Nuestros planes están diseñados para aprovechar al máximo cada sesión, 
        adaptándose a tus metas y nivel de experiencia.
        </p>
    </div>
</section>


</main>

<footer>
    <p>© 2025 All Rights Reserved by David Alejandro Sánchez Prieto</p>
</footer>
</body>
</html>
