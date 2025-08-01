<?php

class Persona {
    public $nombre;
    public $edad;

    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método para mostrar información
    public function mostrarInfo() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . " años<br>";
    }
}

// Crear un objeto de la clase Persona
$persona1 = new Persona("Juan", 25);
$persona1->mostrarInfo();

?>