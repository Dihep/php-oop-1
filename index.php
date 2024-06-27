<?php

class Movie {

    public $title;
    public $description;
    public $releaseDate;
    public $lenght;
    public $genre;
    public $poster;

    public function __construct($title, $description, $releaseDate, $lenght, $genre, $poster)
    {
        $this->title = $title;
        $this->description = $description;
        $this->releaseDate = $releaseDate;
        $this->lenght = $lenght;
        $this->genre = $genre;
        $this->poster = $poster;      
    }
    
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
</head>

<body>
    
</body>
</html>