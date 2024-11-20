<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión del Centro Educativo</title>
</head>
<body>
    <?php
    // Incluyo las clases
    require_once 'clases/Alumno.php';
    require_once 'clases/Profesor.php';
    require_once 'clases/Asignatura.php';


    // Crear asignaturas, alumnos y profesores
    $asignaturas = Asignatura::crearAsignaturasDeMuestra();
    $alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);
    $profesores = Profesor::crearProfesoresDeMuestra();




    ?>
    
    </body>
    </html>    