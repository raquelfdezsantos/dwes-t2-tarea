<?php
require_once '../clases/TriangleGenerator.php';

// Pruebas con distintas alturas
$alturas = [1, 3, 5, 0, -1];


foreach ($alturas as $altura) {
    echo "<h2>Triángulo con altura $altura</h2>";
    echo TriangleGenerator::generateTriangle($altura);
    echo "<hr>";
}

?>