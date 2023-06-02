<?php

class Mobile
{
    public $brand;
    public $price;

    function __construct($brand, $price)
    {
        $this->brand = $brand;
        $this->price = $price;
        echo "Brand is : $this->brand and price is : $this->price <br>";
        echo 'Constructor Called <br>';
    }

    // destructor

    function __destruct()
    {
        echo ' <br> Object Destroyed';
    }
}
$Samsung = new Mobile('Samsund J2', 20000); // constructor called
echo $Samsung->brand . '<br> <br>';

$Redmi = new Mobile('Redmi Note 9', 20000); // constructor called
echo $Redmi->brand . '<br> <br>';

$IPhone = new Mobile('I Phone 14 Pro Max', 200000); // constructor called
echo $IPhone->brand . '<br>';

//destructor called 3 times as there are 3 objects

?>
