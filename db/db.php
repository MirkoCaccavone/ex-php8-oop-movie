<?php

// Creo i generi
$action = new Genre("Azione", "Film con scene d'azione e adrenalina");
$comedy = new Genre("Commedia", "Film divertenti e leggeri");
$drama = new Genre("Drammatico", "Film con trame serie e profonde");

// Array dei generi
$genres = [
    $action,
    $comedy,
    $drama
];

// Creo i film
$movie1 = new Movie("Die Hard", 1988, [$action, $drama], "John McTiernan");
$movie1->setMovieDetails(8.2, 28);

$movie2 = new Movie("La vita è bella", 1997, [$comedy], "Roberto Benigni");
$movie2->setMovieDetails(8.6, 20);

// Array dei film
$movies = [
    $movie1,
    $movie2
];

return [
    'genres' => $genres,
    'movies' => $movies
];