<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Triángulos</title>
    <style>
        body { 
            font-family: monospace; 
        }
    </style>
</head>
<body>
    <?php
    require_once 'clases/TriangleGenerator.php';

    echo "<h1>Triángulo de altura 6</h1>";
    echo TriangleGenerator::generateTriangle(6);
    ?>
</body>
</html>