<?php
class Fruit
{
  // Properties
  public $name;
  public $color;
  public $price;

  // Methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    // Some logic like name editing
    // ....
    return $this->name;
  }

  // Set and Get color
  function set_color($color)
  {
    $this->color = $color;
  }
  function get_color()
  {
    return $this->color;
  }
}

// Objects
$banana = new Fruit();
$orange = new Fruit();

$banana->set_name("Banana");
$orange->name = "ORANGE";

echo "Name: " . $banana->get_name();
echo "\nName: " . $orange->name;

// Colors
$banana->set_color("yellow");
$orange->color = "ORANGE";

echo "\n Color: " . $banana->get_color();
echo "\n Color: " . $orange->color;

class Car
{
  // Properties
  public $owner;
  public $brand;
  public $color;

  function __construct($owner, $b, $col)
  {
    $this->owner = $owner;
    $this->brand = $b;
    $this->color = $col;
  }
  function __destruct()
  {
    echo "\nThe Car ({$this->brand}) - owned by {$this->owner} is gone na";
  }

  function set_owner($owner)
  {
    $this->owner = $owner . " haha";
  }
  function get_owner()
  {
    return $this->owner;
  }
}
echo "\n----------CAR CLASS----------";

$honda = new Car("Wyn", "Honda", "Blue");
$toyota = new  Car("Paps", "Toyota", "Red");

$honda->set_owner("Christian");
$toyota->owner = "papsi";

echo "\n" . $honda->owner .  ", " . $honda->brand . "-" . $honda->color;
echo "\n" . $toyota->owner .  ", " . $toyota->brand . "-" . $toyota->color;