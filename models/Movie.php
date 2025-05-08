<?php
// Definisco la classe Movie
class Movie {
    // Importo il trait MovieDetails per aggiungere funzionalità alla classe Movie
    use MovieDetails; 

    // Definisco le proprietà title, year, genre e director per la classe Movie
    public $title;
    public $year;
    public $genres;
    public $director;

    // Costruttore per inizializzare le proprietà
    public function __construct($_title, $_year, $_genres, $_director) {
        $this->title = $_title;
        $this->year = $_year;
        // Controllo se $_genres è un array, altrimenti lo converto in un array
        $this->genres = is_array($_genres) ? $_genres : [$_genres];
        $this->director = $_director;
    }

    // Metodo per ottenere le informazioni del film
    public function getInfo() {
        
        // Funzione anonima per mappare i generi in una stringa
        $genreStrings = array_map(function($genre) { 
            return "{$genre->name} ({$genre->description})";
        }, $this->genres);
        
        $genresString = join(', ', $genreStrings);
        
        return "Titolo: {$this->title}, Anno: {$this->year}, Generi: {$genresString}, " . 
               "Regista: {$this->director}, " . $this->getMovieDetails();
    }
}

?>