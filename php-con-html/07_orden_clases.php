<?php

require 'Course.php';

$course = new Course(
    title: 'Curso profesional de PHP y Laravel',
    subtitle: 'Aprende PHP y Laravel desde cero',
    description: 'En este curso aprenderás los fundamentos de PHP, un lenguaje de programación muy popular para el desarrollo web.',
    tags: ['PHP', 'Laravel', 'Desarrollo Web']
);

$course->addTag('Frameworks');
$course->addTag('Desarrollo de Software');
$course->addTag('PHP'); // Etiqueta que ya existe.
$course->addTag(''); // Etiqueta vacia.
$course->addTag('Programación'); // Agrega una nueva etiqueta.
$course->addTag('Desarrollo Web'); // No se agrega porque ya existe.
$course->addTag('Backend'); // Agrega una nueva etiqueta.
// Si se intenta agregar más de 5 etiquetas, no se agregan más etiquetas.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->getTitle() ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course->getTitle() ?></h1>

    <h2><?= $course->getSubtitle() ?></h2>

    <p><?= $course->getDescription() ?></p>

    <p>
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($course->getTags() as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>