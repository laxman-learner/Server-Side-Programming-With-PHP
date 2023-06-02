<?php

/*  uuencode and uudecode function in php => these functions are used for message encoding and return the string 
that contain (32-35)%  more character than original string and we can also perform decoding on the encrypted 
message
 */
$str = "Hello World";
echo "<br> Original string is : ".$str;
echo "<br> Encrypted Message : ".convert_uuencode($str);

$Cipher = convert_uuencode($str);

echo "<br> Original Message : ".convert_uudecode($Cipher);
?>