<?php

class Mobile
{
    //properties
    public $brand;
    public $price;

    // methods
    function getData($brand, $price)
    {
        $this->brand = $brand;
        $this->price = $price;
        echo "Model is : $this->brand and price is : $this->price <br>";
    }
}
$Redmi = new Mobile();
$Redmi->getData('Redmi Note 9', 30000);
$Samsung = new Mobile();
$Samsung->getData('J2', 20000);

?>
