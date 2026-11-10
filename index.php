<?php
// Página principal de bienvenida; actualiza estos datos con la información del alumno y su escuela.
$nombreAlumno = 'Nombre del alumno';
$nombreEscuela = 'Nombre de la escuela';
$nombreTarea = 'Página de bienvenida y saludos';
$fecha = date('d/m/Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de bienvenida del alumno y acceso a saludos en distintos idiomas.">
    <title>Bienvenido | <?= htmlspecialchars($nombreEscuela, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="barra">
        <a class="marca" href="index.php" aria-label="Inicio">
            <span class="marca-icono" aria-hidden="true">IE</span>
            <span><?= htmlspecialchars($nombreEscuela, ENT_QUOTES, 'UTF-8') ?></span>
        </a>
        <nav aria-label="Navegación principal">
            <a class="enlace-nav activo" href="index.php" aria-current="page">Inicio</a>
            <a class="enlace-nav" href="saludos.php">Saludos</a>
        </nav>
    </header>

    <main class="contenedor">
        <section class="bienvenida tarjeta">
            <p class="etiqueta">PORTAL ESCOLAR</p>
            <h1>Bienvenido<span class="puntos">....</span></h1>
            <p class="introduccion">Nos alegra tenerte aquí. Esta página presenta los datos de tu tarea y te invita a explorar saludos en otros idiomas.</p>
            <a class="boton" href="saludos.php">Explorar saludos <span aria-hidden="true">&rarr;</span></a>
            <div class="decoracion decoracion-uno" aria-hidden="true"></div>
            <div class="decoracion decoracion-dos" aria-hidden="true"></div>
        </section>

        <section class="datos" aria-labelledby="titulo-datos">
            <div class="encabezado-seccion">
                <p class="etiqueta">TU INFORMACIÓN</p>
                <h2 id="titulo-datos">Detalles de la tarea</h2>
            </div>
            <div class="rejilla">
                <article class="dato tarjeta">
                    <span class="dato-icono" aria-hidden="true">✦</span>
                    <p class="dato-etiqueta">Alumno</p>
                    <p class="dato-valor"><?= htmlspecialchars($nombreAlumno, ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="dato tarjeta">
                    <span class="dato-icono" aria-hidden="true">▤</span>
                    <p class="dato-etiqueta">Tarea</p>
                    <p class="dato-valor"><?= htmlspecialchars($nombreTarea, ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="dato tarjeta">
                    <span class="dato-icono" aria-hidden="true">◷</span>
                    <p class="dato-etiqueta">Fecha</p>
                    <p class="dato-valor"><?= htmlspecialchars($fecha, ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="dato tarjeta">
                    <span class="dato-icono" aria-hidden="true">⌂</span>
                    <p class="dato-etiqueta">Escuela</p>
                    <p class="dato-valor"><?= htmlspecialchars($nombreEscuela, ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            </div>
        </section>
    </main>

    <footer class="pie">
        <p>Un espacio para aprender y descubrir.</p>
    </footer>
</body>
</html>