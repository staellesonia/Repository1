<?php

class Voiture
{
  public $type;
  public $color;
  public $prix;

  function __construct($init_type, $init_color, $init_prix)
  {
    $this->type  = $init_type;
    $this->color = $init_color;
    $this->prix  = $init_prix;
  }
  function getBrand ($brand)
  {
    $this->getBrand = $brand
  }
}
$voiture = new Voiture('VW', 'Rouge', '50euros');
var_dump($voiture);
// echo $voiture->getBrand($brand);
?>
