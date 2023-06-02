<?php

// bin2hex() and hex2bin()


echo bin2hex("Hello World");
 //used for securing the message. This function convert ASCII characters to hexadecimal values

$new = bin2hex("Hello World");
echo "<br>".hex2bin($new); // this function convert hexadecimal values to ASCII characters


$new = bin2hex("Beautiful World becomes because of You");
echo "<br> Message in Hex : ".$new;
echo "<br>".hex2bin($new); // this function convert hexadecimal values to ASCII characters



?>