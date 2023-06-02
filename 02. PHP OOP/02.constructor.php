<?php

class Mobile
{
    // properties
    public $brand;
    public $price;

    // constructor
    //     function Mobile(){.....} ===> old style

    function __construct($brand, $price)
    {
        $this->brand = $brand;
        $this->price = $price;
        echo "Brand is $brand and price is $price <br>";
    }
}
$Redmi = new Mobile('Redmi Note 9', 30000); //constructor called
$Samsung = new Mobile('Samsung J2', 20000);
echo $Samsung->brand;
?>
