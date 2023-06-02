<?php

// overriding inherited methods

class Fruit
{
    public $name;
    public $color;

    public $taste = 'sweet <br>';
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "Name is $this->name , and color is $this->color <br>";
    }
}
class Strawberry extends Fruit
{
    public $taste = 'bitter <br>'; // property overriding
    public $weight;
    public function __construct($name, $color, $weight)
    {
        // method overriding
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro()
    {
        echo "Name is $this->name , color is $this->color , and weight is $this->weight <br>";
    }
}

// object of the derived class

echo '<b> Overriding inherited properties and methods </b> <br>';

$strawberry = new Strawberry('Strawberry', 'red', '50kg');
$strawberry->intro();
echo "Taste is {$strawberry->taste}";
$mango = new Fruit('Mango', 'Yellow');
$mango->intro();
echo "Taste is {$mango->taste}";

?>
