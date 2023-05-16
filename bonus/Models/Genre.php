<?php
class Genre
{
  // Attributo
  public $name;

  // Costruttore
  public function __construct($name)
  {
    $this->name = $name;
  }

  // Metodo
  public function getName()
  {
    return $this->name;
  }
}
