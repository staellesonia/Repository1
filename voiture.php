<?php

class Voiture
{
  public $type;
  public $color;

  function __construct($init_type, $init_color)
  {
    $this->type = $init_type;
    $this->color = $init_color;
  }
  function getBrand ($brand)
  { }
}
$voiture = new Voiture('VW', 'Rouge');
var_dump($voiture);
// echo $voiture->getBrand($brand);
