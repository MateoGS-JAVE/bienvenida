<?php
// Catálogo de saludos; el idioma se elige con el formulario y se valida antes de mostrarlo.
$saludos = [
    'es' => ['idioma' => 'Español', 'saludo' => '¡Hola!', 'detalle' => 'Un saludo amistoso en español.'],
    'en' => ['idioma' => 'Inglés', 'saludo' => 'Hello!', 'detalle' => 'A friendly greeting in English.'],
    'fr' => ['idioma' => 'Francés', 'saludo' => 'Bonjour !', 'detalle' => 'Une salutation amicale en français.'],
    'it' => ['idioma' => 'Italiano', 'saludo' => 'Ciao!', 'detalle' => 'Un saluto cordiale in italiano.'],
    'de' => ['idioma' => 'Alemán', 'saludo' => 'Guten Tag!', 'detalle' => 'Ein freundlicher Gruß auf Deutsch.'],
    'pt' => ['idioma' => 'Portugués', 'saludo' => 'Olá!', 'detalle' => 'Uma saudação amigável em português.'],
    'ja' => ['idioma' => 'Japonés', 'saludo' => 'こんにちは！', 'detalle' => '日本語のあいさつです。'],
];

$idiomaSeleccionado = filter_input(INPUT_GET, 'idioma', FILTER_UNSAFE_RAW);
if (!is_string($idiomaSeleccionado) || !isset($saludos[$idiomaSeleccionado])) {
    $idiomaSeleccionado = 'es';
}
$saludoActual = $saludos[$idiomaSeleccionado];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elige un idioma y descubre un saludo típico.">
    <title>Saludos en otros idiomas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="barra">
        <a class="marca" href="index.php" aria-label="Inicio">
            <span class="marca-icono" aria-hidden="true">IE</span>
            <span>Portal escolar</span>
        </a>
        <nav aria-label="Navegación principal">
            <a class="enlace-nav" href="index.php">Inicio</a>
            <a class="enlace-nav activo" href="saludos.php" aria-current="page">Saludos</a>
        </nav>
    </header>

    <main class="contenedor pagina-saludos">
        <section class="encabezado-seccion">
            <p class="etiqueta">UN SALUDO PARA CADA LUGAR</p>
            <h1>Saludos del mundo</h1>
            <p class="introduccion introduccion-oscura">Elige un idioma para descubrir cómo saludar. ¡Hay siete opciones para explorar!</p>
        </section>

        <section class="selector tarjeta" aria-labelledby="titulo-selector">
            <h2 id="titulo-selector">Elige un idioma</h2>
            <form method="get" action="saludos.php">
                <label for="idioma">Idioma</label>
                <div class="controles">
                    <select id="idioma" name="idioma">
                        <?php foreach ($saludos as $codigo => $saludo): ?>
                            <option value="<?= htmlspecialchars($codigo, ENT_QUOTES, 'UTF-8') ?>" <?= $idiomaSeleccionado === $codigo ? 'selected' : '' ?>>
                                <?= htmlspecialchars($saludo['idioma'], ENT_QUOTES, 'UTF-8') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button class="boton" type="submit">Ver saludo</button>
                </div>
            </form>
        </section>

        <section class="resultado tarjeta" aria-live="polite" aria-labelledby="titulo-saludo">
            <span class="resultado-icono" aria-hidden="true">✳</span>
            <p class="etiqueta"><?= htmlspecialchars($saludoActual['idioma'], ENT_QUOTES, 'UTF-8') ?></p>
            <h2 id="titulo-saludo" lang="<?= htmlspecialchars($idiomaSeleccionado, ENT_QUOTES, 'UTF-8') ?>">
                <?= htmlspecialchars($saludoActual['saludo'], ENT_QUOTES, 'UTF-8') ?>
            </h2>
            <p><?= htmlspecialchars($saludoActual['detalle'], ENT_QUOTES, 'UTF-8') ?></p>
        </section>

        <a class="regreso" href="index.php">&larr; Volver a la bienvenida</a>
    </main>

    <footer class="pie">
        <p>Un espacio para aprender y descubrir.</p>
    </footer>
</body>
</html>
