<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

<?php
class Movies
{
    public $title;
    public $original_language;
    public $year;
    public $duration;
    public $director;
    public $genre;


    // Costruttore
    public function __construct($title, $original_language, int $year, $duration, $director, $genre)
    {
        $this->title = $title;
        $this->original_language = $original_language;
        $this->year = $year;
        $this->duration = $duration;
        $this->director = $director;
        $this->genre = $genre;
    }

    // Funzione the torna tutti i dettagli del film
    public function getMovieDetails()
    {
        return $this->title . ' - ' . $this->original_language . ' - ' . $this->year . ' - ' . $this->duration . ' - ' . $this->director . ' - ' . $this->genre;
    }
}

$movie1 = new Movies('Iron Man', 'English', 2008, '2h 6m', 'Jon Favreau', 'Action');
$movie2 = new Movies('Guardians of the Galaxy', 'English', 2014, '2h 2m', 'James Gunn', 'Action');

$movies = [
    $movie1,
    $movie2
];
// var_dump($movies);
// var_dump($movie1);
// var_dump($movie2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Movies</title>
</head>

<body>
    <div class="container p-4">
        <h1 class="text-center">Movies</h1>

        <?php foreach ($movies as $movie) { ?>
            <div class="my-3">
                <div>Movie Title: <?php echo $movie->title; ?></div>
                <div>Original Language: <?php echo $movie->original_language; ?></div>
                <div>Year: <?php echo $movie->year; ?></div>
                <div>Duration: <?php echo $movie->duration; ?></div>
                <div>Director: <?php echo $movie->director; ?></div>
                <div>Genre: <?php echo $movie->genre; ?></div>
            </div>
        <?php } ?>

    </div>
</body>

</html>