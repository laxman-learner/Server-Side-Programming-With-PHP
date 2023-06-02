<?php
//function with return type
function sum($math, $eng, $sci)
{
    $s = $math + $eng + $sci;
    return $s;
}
echo sum(78,67,87);
//another way
$total = sum(78,67,87);
 function percentage($st){
     $per = $st/3;
     return $per;
 }
 echo "<br>". percentage($total)."% marks";

?>