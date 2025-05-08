<?php

// Definisco la classe Genre
class Genre {
    // Definisco le proprietà name e description per la classe Genre
    public $name;
    public $description;

    // Costruttore per inizializzare le proprietà
    public function __construct($_name, $_description) {
        $this->name = $_name;
        $this->description = $_description;
    }
}

?>