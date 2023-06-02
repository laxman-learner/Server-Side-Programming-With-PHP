<?php

/* inheritance with constructor - When we create object of child class and child class contains 
constructor, then constructor of the child class is called, otherwise constructor constructor
of the parent class is called (if construcor is defined in parent class) */

class Employee
{
    public $id;
    function __construct($id)
    {
        echo 'Parent class constructor called <br>';
        $this->id = $id;
        echo $this->id . '<br>';
    }
}

class Manager extends Employee
{
    public $name;
    function __construct($id, $name)
    {
        parent::__construct($id); // to call the constructor of the parent class
        echo 'Child class constructor called <br>';
        $this->name = $name;
        echo $this->name;
    }
}
echo '<b>Inheritance with Constructor </b> <br>  ';
$emp1 = new Manager('101', 'Laxmi Narayan');

// inheritance and protected access modifier

class Fruit
{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro()
    {
        echo "Fruit is $this->name and color is $this->color";
    }
}
class Strawberry extends Fruit
{
    public function message()
    {
        echo 'Am I fruit or berry? <br>';
        $this->intro();
    }
}
$strawberry = new Strawberry('Straberry', 'red');
$strawberry->message();
?>
