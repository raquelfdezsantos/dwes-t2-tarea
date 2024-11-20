<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
        table {
            border-collapse: collapse; 
            width: 100%; 
        }
        th, td {
            border: 1px solid black; 
            padding: 5px; 
        }
        th {
            text-align: center; 
        }
    </style>
</head>
<body>
    <?php
    $libros = [
        "libro1" => [
            "titulo" => "PHP para Principiantes", 
            "autor" => "Carlos Ruiz", 
            "precio" => 19.99, 
            "categoria" => "Desarrollo Web"
        ],
        "libro2" => [
            "titulo" => "JavaScript Avanzado", 
            "autor" => "Laura García", 
            "precio" => 25.99, 
            "categoria" => "Desarrollo Web"
        ],
        "libro3" => [
            "titulo" => "Algoritmos en Python",
            "autor" => "Miguel Fernández", 
            "precio" => 29.99, 
            "categoria" => "Algoritmos"
        ],
    ];
    

    // Tabla con información de todos los libros
    echo "<h1>Información de todos los libros</h1>";
    echo "<table border='1'>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>";
    foreach ($libros as $libro) {
        echo "<tr>
                <td>{$libro['titulo']}</td>
                <td>{$libro['autor']}</td>
                <td>{$libro['precio']}€</td>
                <td>{$libro['categoria']}</td>
            </tr>";
    }
    echo "</table>";


    // Libros de la categoría "Desarrollo Web"
    echo "<h2>Libros de la categoría Desarrollo Web</h2>";
    echo "<ol>";
    foreach ($libros as $libro) {
        if ($libro['categoria'] === "Desarrollo Web") {
            echo "<li>{$libro['titulo']}</li>";
        }
    }
    echo "</ol>";


    ?>
</body>
</html>