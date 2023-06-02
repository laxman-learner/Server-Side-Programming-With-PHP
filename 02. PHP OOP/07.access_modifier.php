<?php

// default access modifier is public

// public access modifier - accessible from inside and outside the class
class Base
{
    public $a;
    public $b;

    public function display($x)
    {
        $this->a = $x;
        echo "Parent Function $this->a <br>";
    }
}

class Derived extends Base
{
    //$this ->b = 30; this results error.We cannot directly assign a value to a property outside
    //of a method or constructor. Instead, property assignments should be done inside a method
    // or constructor.

    function show($y)
    {
        $this->a = 40; // accessing public property from derived class
        echo "Value of a in derived class is $this->a <br>";
        $this->display(50); // accessing public method from derived class
    }
}

echo '<b> Pubic access modifier </b> <br>';
// object of the base class
$myObj = new Base(); // accessing public method outside the class
$myObj->display(10); // accessing public property outside the class
$myObj->b = 20;
echo "Initialized value after creating object is $myObj->b <br>";

// object of the derived class

$myDerive = new Derived();
$myDerive->show(60);

// private access modifier - accessible from only within the class
echo '<br> <b>Private access modifier </b> <br>';

class ParentClass // parent is a keyword in php so don't use this as the class name
{
    private $a;

    private function print()
    {
        echo "The value of a is $this->a";
    }

    // constructor of the base class to initialize and display the value of a

    function __construct($x)
    {
        $this->a = $x;
        echo "The value of a is $this->a <br>";
    }
}
class ChildClass extends ParentClass
{
    function getValue()
    {
        $this->a = 20; // call to the private property of the base class
        $this->print(); // call to the private method of the base class
    }
}

//object of the parent class
echo 'Constructor called by creating the object of the base class <br>';
$obj1 = new ParentClass(30);
// $obj1->a = 40;   not allowed - Cannot access private property Father::$a
// $obj1->print();  not allowed - Call to private method Father::print() from global scope

echo 'Constructor called by creating the object of the derived class <br>';
$obj2 = new ChildClass(40);
// $obj2->getValue(); not allowed - Call to private method ParentClass::print() from scope ChildClass

// protected access specifier - accessible within same class and child class and so on..

class First
{
    protected $a = 100;
    public function displayParent()
    {
        echo "Parent Function $this->a <br>";
    }
}
class Second extends First
{
    public function displayChild($y)
    {
        $this->a = $y;
        echo "Value of a assigned from child class is $this->a";
    }
}

echo '<br> <b>Protected access modifier </b> <br>';
$Obj4 = new First();
$Obj4->displayParent();
// $Obj4->a = 120; not allowed - Cannot access protected property First::$a

$Obj5 = new Second();
$Obj5->displayChild(300);

?>
