<?php

class Course {

    public function __construct(
        public string $title,
        public string $subtitle,
        public string $description,
        public array $tags
    ) {
        // Constructor para inicializar las propiedades del curso
        // No es necesario hacer nada aquí, ya que las propiedades se inicializan automáticamente
    }
}

$course = new Course(
    title: 'Curso profesional de PHP y Laravel',
    subtitle: 'Aprende PHP y Laravel desde cero',
    description: 'En este curso aprenderás los fundamentos de PHP, un lenguaje de programación muy popular para el desarrollo web.',
    tags: ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS', 'MySQL']
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course->title ?></h1>

    <h2><?= $course->subtitle ?></h2>

    <p><?= $course->description ?></p>

    <p>
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($course->tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>