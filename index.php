<?php

// Classe
class Genre
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

class Movie
{

  // Attributi
  public $title;
  public $decription;
  public $year;
  public $genre;

  // Costruttore
  public function __construct($_title, $_decription, $_year, $_genre)
  {
    $this->title = $_title;
    $this->decription = $_decription;
    $this->year = $_year;
    $this->genre = $_genre;
  }

  // Metodo
  public function getInfo()
  {
    return "$this->title ($this->year), genere: " . $this->genre->getName();
  }
}


// Istanziamo due oggetti Movie
$genre1 = new Genre("Action");
$genre2 = new Genre("Comedy");
$movie1 = new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1);
$movie2 = new Movie("Scuola di polizia", "lorem", 1984, $genre2,);

// Stampiamo le informazioni dei due film
// var_dump($movie1->getInfo());
// var_dump($movie2->getInfo());

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>

<body>
  <p>Film:
    <?php echo $movie1->getInfo() ?> <br>
    <?php echo $movie2->getInfo() ?>
  </p>
</body>

</html>