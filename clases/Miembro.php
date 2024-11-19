<?php
abstract class Miembro {
    // Atributos
    protected int $id;
    protected string $nombre;
    protected string $apellidos;
    protected string $email;

    
    // Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }


    // toString
    public function __toString(): string {
        return "{$this->nombre} {$this->apellidos} ({$this->email})";
    }


    // Getters y setters
    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getEmail(): string {
        return $this->email;
    }
}
?>