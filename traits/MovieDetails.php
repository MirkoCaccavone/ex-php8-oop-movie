<?php

trait MovieDetails {
    private $rating;
    private $budget;

    public function setMovieDetails($rating, $budget) {
        $this->rating = $rating;
        $this->budget = $budget;
    }

    public function getMovieDetails() {
        return "Rating: {$this->rating}/10, Budget: {$this->budget}M";
    }
}