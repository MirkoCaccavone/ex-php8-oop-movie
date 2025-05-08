<?php

// Importo i file necessari
require_once './traits/MovieDetails.php';
require_once './models/Genre.php';
require_once './models/Movie.php';

// Importo i dati dal database
$db = require_once './db/db.php';
$movies = $db['movies'];
$genres = $db['genres'];

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
        <?php foreach ($movies as $movie): ?>
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