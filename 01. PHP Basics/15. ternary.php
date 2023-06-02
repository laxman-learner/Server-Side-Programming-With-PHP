<?php
$x = 25;
($x >20)? $z = "Greater": $z = "Smaller"; // parenthesis is optional in condition
echo $z;
// another way
$z = ($x >20)? "Greater":"Smaller";
echo "<br>".$z;
//we can combine string also
$z = "The Value is ". ($x > 20? "Greater":"Smaller")." than ".$x;
echo "<br>".$z;
?>