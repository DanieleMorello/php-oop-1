<?php
require __DIR__ . '/Models/Genre.php';
require __DIR__ . '/Models/Movie.php';

$movie =
  [
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1),
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1),
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1),
    new Movie("Ong-Bak - Nato per combattere", "lorem", 2003, $genre1)
  ];

echo $movie;
