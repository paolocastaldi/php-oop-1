<?php

// DEFINISCO LA CLASSE MOVIE

class Movie {
    public $title;
    public $director;
    public $year;

    // DEFINISCO COSTRUTTORE

    public function __construct(string $_title, string $_director, int $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    // DEFINIZIONE METODI GETTER

    public function getTitle() {
        return $this->title;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getYear() {
        return $this->year;
    }
    

    // DEFINIZIONE METODI SETTER

    public function setTitle($title) {
        if(!is_string($title) || $title === "") return false;
        $this->title = $title;
    }

    public function setDirector($director) {
        if(!is_string($director) || $director === "") return false;
        $this->director = $director;
    }

    public function setYear($year) {
        if(!is_numeric($year) || $year < 1800 || $year > date("Y")) return false;
        $this->year = $year;
    }
    
}

// ISTANZA DEGLI OGGETTI MOVIE SCELTI

$movie1 = new Movie("Fight Club", "David Fincher", 1999);
$movie2 = new Movie("THE BATMAN", "Matt Reeves", 2022);

// STAMPA DEI VALORI COMPILATI

echo $movie1->getTitle() . " (" . $movie1->getYear() . ") - Directed by: " . $movie1->getDirector() . "<br>";
echo $movie2->getTitle() . " (" . $movie2->getYear() . ") - Directed by: " . $movie2->getDirector();

var_dump($movie1);
var_dump($movie2);
?>