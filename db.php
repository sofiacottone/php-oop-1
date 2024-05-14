<?php
require_once __DIR__ . '/Models/Movie.php';

$movie1 = new Movie('Iron Man', 'English', 2008, '2h 6m', 'Jon Favreau', ['Action', 'Science Fiction', 'Adventure']);
$movie2 = new Movie('Iron Man 2', 'English', 2010, '2h 4m', 'Jon Favreau', ['Action', 'Science Fiction', 'Adventure']);
$movie3 = new Movie('Iron Man 3', 'English', 2013, '1h 49m', 'Shane Black', ['Action', 'Science Fiction', 'Adventure']);
$movie4 = new Movie('Guardians of the Galaxy', 'English', 2014, '2h 2m', 'James Gunn', ['Action', 'Science Fiction', 'Adventure']);
$movie5 = new Movie('Guardians of the Galaxy Vol. 2', 'English', 2017, '2h 17m', 'James Gunn', ['Action', 'Science Fiction', 'Adventure']);
$movie6 = new Movie('Guardians of the Galaxy Vol. 3', 'English', 2023, '2h 30m', 'James Gunn', ['Action', 'Science Fiction', 'Adventure']);

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $movie6,
];
