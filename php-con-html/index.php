<?php

require 'Course1.php';

$course = new Course(
    title: 'Curso profesional de PHP y Laravel',
    subtitle: 'Aprende PHP y Laravel desde cero',
    description: 'En este curso aprenderás los fundamentos de PHP, un lenguaje de programación muy popular para el desarrollo web.',
    tags: ['PHP', 'Laravel', 'Desarrollo Web'],
    type: CourseType::PAID // El curso es de pago
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
    <?= $course ?>
</body>
</html>