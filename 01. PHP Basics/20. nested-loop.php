<?php

/*Nested loop are usually used to display the values in tabular form i.e. in the form
of row and column: outer loop represents row and inner one represent column */
for($x = 1; $x <= 100; $x= $x + 10) // outer loop
{
    for($y = $x; $y < $x+10; $y++) // inner loop
    {
   echo $y."  ";
    }
    echo "<br>";
}
?>