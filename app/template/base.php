<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= dirname($_SERVER['SCRIPT_NAME']) . 'public/styles.css' ?>">
    <title><?= $titulo ?? 'Estadística' ?></title>
</head>

<body>
    <!-- Se renderiza el contenido -->
    <?= $contenido ?>
</body>

</html>