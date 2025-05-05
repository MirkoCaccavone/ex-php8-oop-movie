<?php

// Definisco la classe Genre
class Genre {
    // Definisco la classe Genre con le proprietà name e description
    public $name;
    public $description;

    // Costruttore per inizializzare le proprietà
    public function __construct($_name, $_description) {
        $this->name = $_name;
        $this->description = $_description;
    }
}

?>