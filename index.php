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


    // Creo asignaturas, alumnos y profesores
    $asignaturas = Asignatura::crearAsignaturasDeMuestra();
    $alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);
    $profesores = Profesor::crearProfesoresDeMuestra();


    echo "<h1>Gestión del Centro Educativo</h1>";


    // Muestro la lista de todos los alumnos
    echo "<h2>Alumnos</h2><ul>";
    foreach ($alumnos as $alumno) {
        echo "<li>{$alumno}</li>";
    }
    echo "</ul>";


    // Muestro la lista de todos los profesores
    echo "<h2>Profesores</h2><ul>";
    foreach ($profesores as $profesor) {
        echo "<li>{$profesor}</li>";
    }
    echo "</ul>";


    // Muestro la lista de todas las asignaturas
    echo "<h2>Asignaturas</h2><ul>";
    foreach ($asignaturas as $asignatura) {
        echo "<li>{$asignatura}</li>";
    }
    echo "</ul>";


    // Listado de alumnos menores o iguales a 23 años (con array_filter)
    echo "<h2>Alumnos <= 23</h2><ul>";
    $alumnosMenores23 = array_filter($alumnos, fn($alumno) => $alumno->getEdad() <= 23);
    foreach ($alumnosMenores23 as $alumno) {
        echo "<li>{$alumno}</li>";
    }
    echo "</ul>";


    // Listado de alumnos con al menos dos asignaturas (con array_filter)
    echo "<h2>Alumnos con al Menos Dos Asignaturas</h2><ul>";
    $alumnosConDosAsignaturas = array_filter($alumnos, fn($alumno) => count($alumno->getAsignaturas()) >= 2);
    foreach ($alumnosConDosAsignaturas as $alumno) {
        echo "<li>{$alumno}</li>";
    }
    echo "</ul>";


    // Listado de asignaturas con algún alumno matriculado (sin array_filter)
    echo "<h2>Asignaturas con algún Alumno Matriculado</h2><ul>";
    foreach ($asignaturas as $asignatura) {
        $tieneAlumnos = false;
        foreach ($alumnos as $alumno) {
            foreach ($alumno->getAsignaturas() as $asignaturaMatriculada) {
                if ($asignaturaMatriculada->getId() === $asignatura->getId()) {
                    $tieneAlumnos = true;
                    break 2;
                }
            }
        }
        if ($tieneAlumnos) {
            echo "<li>{$asignatura}</li>";
        }
    }
    echo "</ul>";

    ?>
    
    </body>
    </html>    