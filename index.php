<?php

require_once './traits/MovieDetails.php';

require_once './models/Genre.php';

require_once './models/Movie.php';

// Creo dei generi
$action = new Genre("Azione", "Film con scene d'azione e adrenalina");
$comedy = new Genre("Commedia", "Film divertenti e leggeri");
$drama = new Genre("Drammatico", "Film con trame serie e profonde");


// Creo due film con dettagli aggiuntivi
$movie1 = new Movie("Die Hard", 1988, [$action, $drama], "John McTiernan");
$movie1->setMovieDetails(8.2, 28);

$movie2 = new Movie("La vita è bella", 1997, $comedy, "Roberto Benigni");
$movie2->setMovieDetails(8.6, 20);

// // Stampo le informazioni dei film
// echo $movie1->getInfo() . "<br>";
// echo $movie2->getInfo();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <h1>I Nostri Film</h1>

    <div class="movie-grid">
        <?php foreach ([$movie1, $movie2] as $movie): ?>
            <div class="movie-card">
                <h2 class="movie-title"><?php echo $movie->title; ?></h2>
                <div class="movie-info">
                    <p>Anno: <?php echo $movie->year; ?></p>
                    <p>Regista: <?php echo $movie->director; ?></p>
                </div>
                <div class="movie-genres">
                    <?php foreach ($movie->genres as $genre): ?>
                        <span class="genre-tag"><?php echo $genre->name; ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="movie-details">
                    <?php echo $movie->getMovieDetails(); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>