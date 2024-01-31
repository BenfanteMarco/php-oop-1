<?php

// Definisco la classe Movie
class Movies
{
    public $title;
    public $year;
    public $genre;
    public $duration;

    function __construct($_title, $_year, $_genre, $_duration)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
    }

    public function setFilmYear($year)
    {
        if ($year > 2020) {
            $this->year = 'Film recente';
        } else {
            $this->year = 'Film non recente';
        }
    }
};

$movie_1 = new Movies('Bullet Train', 'Azione', '2h 06min');
$movie_2 = new Movies('Interstellar', 'Sci-fi', '2h 49min');
$movie_3 = new Movies('Un weekend da bamboccioni', 'Commedia', '1h 42min');

$movie_1->setFilmYear(2022);
$movie_1->setFilmYear(2014);
$movie_1->setFilmYear(2010);

$moviesArray = [
    $movie_1,
    $movie_2,
    $movie_3
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($moviesArray as $movie) { ?>
                <div class="col-4">
                    <div class="text-center">
                        <h1><?php echo $movie->title ?></h1>
                        <h3><?php echo "Genere:" . $movie->genre ?></h3>
                        <h5><?php echo  $movie->year . " Durata del film:" . $movie->duration ?></h5>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>