<?php

class Movie {

    public $title;
    public $description;
    public $releaseDate;
    public $lenght;
    public $genre;
    public $poster;

    public function __construct($title, $description, $releaseDate, $lenght, $genre)
    {
        $this->title = $title;
        $this->description = $description;
        $this->releaseDate = $releaseDate;
        $this->lenght = $lenght;
        $this->genre = $genre;    
    }
    
    public function print() {
        echo "<ul><li>Titolo: " . $this->title . "</li>";
        echo "<li>Descrizione: " . $this->description . "</li>";
        echo "<li>Data di uscita: " . $this->releaseDate . "</li>";
        echo "<li>Durata: " . $this->lenght . "</li>";
        echo "<li>Genere: " . $this->genre . "</li></ul>";
    }
}

$movie1 = new Movie(
    "Iron man", 
    "Descrizione del film di Iron Man",
    "18-18-1888",
    "2 ore",
    "azione"
);
$movie2 = new Movie(
    "Gold man", 
    "Descrizione del film di Gold Man",
    "13-13-1333",
    "3 ore",
    "romantico"
    )

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php
        $movie1->print();
        $movie2->print();
    ?>

</body>
</html>