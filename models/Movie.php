<?php
// Definisco la classe Movie
class Movie {
    use MovieDetails;

    // Definisco la classe Movie con le proprietà title, year, genre e director
    public $title;
    public $year;
    public $genres;
    public $director;

    // Costruttore per inizializzare le proprietà
    public function __construct($_title, $_year, $_genres, $_director) {
        $this->title = $_title;
        $this->year = $_year;
        $this->genres = is_array($_genres) ? $_genres : [$_genres];
        $this->director = $_director;
    }

    // Metodo per ottenere le informazioni del film
    public function getInfo() {
        // Creo la stringa dei generi
        $genreStrings = array_map(function($genre) {
            return "{$genre->name} ({$genre->description})";
        }, $this->genres);
        
        $genresString = implode(', ', $genreStrings);
        
        return "Titolo: {$this->title}, Anno: {$this->year}, Generi: {$genresString}, " . 
               "Regista: {$this->director}, " . $this->getMovieDetails();
    }
}



?>