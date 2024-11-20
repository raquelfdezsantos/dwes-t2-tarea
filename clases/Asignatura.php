<?php
class Asignatura {
    // Atributos
    private int $id;
    private string $nombre;
    private int $creditos;


    // Constructor
    public function __construct(int $id, string $nombre, int $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }


    // toString
    public function __toString(): string {
        return "Nombre: {$this->nombre}, Créditos: {$this->creditos}";
    }
    

    // Getters y setters
    public function getId(): int {
        return $this->id;
    }


    public function getNombre(): string {
        return $this->nombre;
    }


    public function getCreditos(): int {
        return $this->creditos;
    }


    // Método crearAsignaturasDeMuestra
    public static function crearAsignaturasDeMuestra(): array {
        return [
            new Asignatura(1, "DWES", 7),
            new Asignatura(2, "DWEC", 6),
            new Asignatura(3, "DIW", 4),
            new Asignatura(4, "DAW", 4),
        ];
    }
    
}
?>