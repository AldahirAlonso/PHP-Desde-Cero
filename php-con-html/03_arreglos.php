<?php
$course = "Curso profesional de PHP y Laravel";

$tags = [
    "PHP", // 0
    "Laravel", // 1
    "JavaScript", // 2
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course; ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $course; ?></h1>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores distinctio facilis dolorum eos possimus harum libero neque temporibus sed at fuga, minima ipsa suscipit adipisci illum voluptas eum? Quasi, unde?</p>

    <p>
        <strong>Etiquetas:</strong>
        <ul>
            <li><?= $tags[0] ?></li>
            <li><?= $tags[1] ?></li>
            <li><?= $tags[2] ?></li>
        </ul>
    </p>
</body>
</html>