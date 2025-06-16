<?php
$course = "Curso profesional de PHP y Laravel";
$archived = false; // true or false
$status = $archived ? "archivado" : "activo" // Operador ternario para determinar el estado del curso
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
        Este curso está <?= $status ?>
    </p>
</body>
</html>