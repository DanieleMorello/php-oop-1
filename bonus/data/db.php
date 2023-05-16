<?php
require __DIR__ . '../../Models/Genre.php';
require __DIR__ . '../../Models/Movie.php';

// Definisci gli oggetti Genre
$genre1 = new Genre("Azione");
$genre2 = new Genre("Commedia");
$genre3 = new Genre("Drammatico");

// Crea un array di oggetti Movie
$movie =
  [
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1),
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1),
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1),
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1)
  ];
