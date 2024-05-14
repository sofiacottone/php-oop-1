<?php
class Movie
{
    public $title;
    public $original_language;
    public $year;
    public $duration;
    public $director;
    public $genre;


    // Costruttore
    public function __construct($title, $original_language, int $year, $duration, $director, array $genre)
    {
        $this->title = $title;
        $this->original_language = $original_language;
        $this->year = $year;
        $this->duration = $duration;
        $this->director = $director;
        $this->genre = $genre;
    }

    // Funzione che torna tutti i dettagli del film
    public function getMovieDetails()
    {
        return $this->title . ' - ' . $this->original_language . ' - ' . $this->year . ' - ' . $this->duration . ' - ' . $this->director . ' - ' . $this->genre;
    }
}
