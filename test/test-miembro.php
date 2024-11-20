<?php
require_once '../clases/Miembro.php';

try {
    $miembro = new Miembro(1, "Luis", "Rodríguez", "luis@mail.com");
} catch (Error $e) {
    echo "<p>No se puede instanciar la clase abstracta Miembro: {$e->getMessage()}</p>";
}

?>