<?php
// string substring functions

$str = 'Hello World. The world is nice.';
echo substr($str,0);
echo "<br>".substr($str,5);
echo "<br>".substr($str,-10);
echo "<br>".substr($str,0,5);
echo "<br>".substr($str,-10,5);
echo "<br>".substr($str,10,-1);
echo "<br>".substr($str,-10,-1);
echo "<br>".substr($str,-10,3);

?>