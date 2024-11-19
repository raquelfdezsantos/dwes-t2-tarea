<?php
include_once 'Miembro.php';
include_once 'Asignatura.php';

class Alumno extends Miembro {
    // Atributos
    private int $edad;
    private array $asignaturas = [];
    private bool $cursoAbonado = false;


    // Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
    }


    // toString
    public function __toString(): string {
        return "Nombre: {$this->nombre} {$this->apellidos}, Email: {$this->email}";
    }


    // Getters
    public function getAsignaturas(): array {
        return $this->asignaturas;
    }


    public function getEdad(): int {
        return $this->edad;
    }

    
    // Método abonarCurso
    public function abonarCurso(): void {
        $this->cursoAbonado = true;
    }


    // Método matricularseEnAsignatura
    public function matricularseEnAsignatura(Asignatura $asignatura): void {
        foreach ($this->asignaturas as $asignaturaMatriculada) {
            if ($asignaturaMatriculada->getId() === $asignatura->getId()) {
                return; // Ya está matriculado
            }
        }
        $this->asignaturas[] = $asignatura;
    }
    

    // Método crearAlumnosDeMuestra
    public static function crearAlumnosDeMuestra(array $asignaturas): array {
    $alumnos = [
        new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
        new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
        new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
        new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
        new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
        new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
        new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
        new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
        new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
        new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24),
    ];

        // Matriculación en asignaturas
        $alumnos[0]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[2]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[2]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[3]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[4]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[5]->matricularseEnAsignatura($asignaturas[0]);
        $alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[6]->matricularseEnAsignatura($asignaturas[1]); // Está duplicado, se ignorará
        $alumnos[7]->matricularseEnAsignatura($asignaturas[2]);
        $alumnos[8]->matricularseEnAsignatura($asignaturas[1]);
        $alumnos[9]->matricularseEnAsignatura($asignaturas[0]);

        return $alumnos;
    }

}
?>