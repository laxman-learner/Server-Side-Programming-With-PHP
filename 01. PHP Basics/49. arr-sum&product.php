<?php
 /* array_sum() and array_product() in php_
 these function are used to calculate the sum and product of indexed or associative arrays having
 either float or integer value
 */

 // array_sum()
 
 $a = [5,4,6,5];
 echo "<h5>Sum  = ".array_sum($a)."</h5>";

 $a = ['a'=>9.2,'b'=>4.6,'c'=>6,'d'=>5.2];
 echo "<h5>Sum  = ".array_sum($a)."</h5>";

// array_product()

 $a = [5,4,6,5];
 echo "<h5>Product  = ".array_product($a)."</h5>";

 $a = ['a'=>9.2,'b'=>4.6,'c'=>6,'d'=>5.2];
 echo "<h5>Product  = ".array_product($a)."</h5>";


?>

