<?php 

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
