<?php
require_once '../clases/Alumno.php';
require_once '../clases/Asignatura.php';


// Creo asignaturas
$asignaturas = Asignatura::crearAsignaturasDeMuestra();


// Creo alumno
$alumno = new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22);


// Matriculo al alumno en la misma asignatura dos veces
$alumno->matricularseEnAsignatura($asignaturas[0]);
$alumno->matricularseEnAsignatura($asignaturas[0]);


// Muestro asignaturas del alumno
echo "<h2>Asignaturas del Alumno:</h2><ul>";
foreach ($alumno->getAsignaturas() as $asignatura) {
    echo "<li>{$asignatura->getNombre()}</li>";
}
echo "</ul>";


// Compruebo si solo aparece una vez
if (count($alumno->getAsignaturas()) === 1) {
    echo "<p>La asignatura no se ha duplicado. Prueba correcta.</p>";
} else {
    echo "<p>Error: La asignatura está duplicada.</p>";
}

?>