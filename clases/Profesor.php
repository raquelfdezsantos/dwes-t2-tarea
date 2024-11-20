<?php
include_once 'Miembro.php';
include_once 'Asignatura.php';

class Profesor extends Miembro {
    // Atributos
    private bool $titular = false;
    private ?Asignatura $asignatura = null;


    // Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email, string $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $email);
    }


    // toString
    public function __toString(): string {
        return "Nombre: {$this->nombre} {$this->apellidos}, Email: {$this->email}";
    }
    
    
    // Getter
    public function getAsignatura(): ?Asignatura {
        return $this->asignatura;
    }


    // Método asignarAsignatura
    public function asignarAsignatura(Asignatura $asignatura): void {
        $this->asignatura = $asignatura;
    }


    // Método crearProfesoresDeMuestra
    public static function crearProfesoresDeMuestra(): array {
        $profesores = [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES"),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW"),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC"),
            new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW"),
            
        ];
        return $profesores;
    }
}
?>