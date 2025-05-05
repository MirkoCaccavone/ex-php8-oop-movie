<?php

require_once './traits/MovieDetails.php';

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

// Creo dei generi
$action = new Genre("Azione", "Film con scene d'azione e adrenalina");
$comedy = new Genre("Commedia", "Film divertenti e leggeri");
$drama = new Genre("Drammatico", "Film con trame serie e profonde");


// Creo due film con dettagli aggiuntivi
$movie1 = new Movie("Die Hard", 1988, [$action, $drama], "John McTiernan");
$movie1->setMovieDetails(8.2, 28);

$movie2 = new Movie("La vita è bella", 1997, $comedy, "Roberto Benigni");
$movie2->setMovieDetails(8.6, 20);

// Stampo le informazioni dei film
echo $movie1->getInfo() . "<br>";
echo $movie2->getInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP movie</title>
</head>
<body>
    
    

    
</body>
</html>