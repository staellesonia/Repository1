<?php
//création dela classe voiture
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
$voiture = new Voiture('VW', 'Rouge', '50000euros');
var_dump($voiture);
$voiture2 = new Voiture('breack', 'verte', '25000euros');
// echo $voiture->getBrand($brand);
?>
